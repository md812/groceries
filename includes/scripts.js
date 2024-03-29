// disable 'back to previous page' function for user study
window.history.forward();

// cookie handling adapted from https://stackoverflow.com/questions/14573223/set-cookie-and-get-cookie-with-javascript
// get the value of a cookie by its name
function getCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}
// end of adaption

// update conditions by clicking on 'next' button in online shop
function updateCondition() {
  if (getCookie("currentcondition") == 1) {
    document.cookie = "currentcondition=2";
  } else if (getCookie("currentcondition") == 2) {
    document.cookie = "currentcondition=3";
  } else if (getCookie("currentcondition") == 4) {
    window.location.href = "logout.php";
  }
  location.reload(true);
  window.scrollTo(0, 0);
}

// triggered by logout, adapted from https://stackoverflow.com/questions/179355/clearing-all-cookies-with-javascript
function deleteCookie() {
  var cookies = document.cookie.split(";");

  for (var i = 0; i < cookies.length; i++) {
    var cookie = cookies[i];
    var eqPos = cookie.indexOf("=");
    var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
    document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
  }
}
// end of adaption

// modal for bigger images adapted from https://www.w3schools.com/howto/howto_css_modal_images.asp and https://stackoverflow.com/questions/47798971/several-modal-images-on-page
// get the modal
var modal = document.getElementById("modal");

// get the image and insert it inside the modal - use its 'alt' text as a caption
var images = document.getElementsByClassName("productImg");
var modalImg = document.getElementById("img");
var captionText = document.getElementById("caption");

// go through all of the images with our custom class
for (var i = 0; i < images.length; i++) {
  var img = images[i];
  // and attach our click listener for this image.
  img.onclick = function () {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.title;
  };
}

// get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// when the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};
// end of adaption

// functionality of shopping cart adapted from https://www.youtube.com/watch?v=YeFzkC2awTM
if (document.readyState == 'loading') {
  document.addEventListener('DOMContentLoaded', ready);
} else {
  ready();
}

function ready() {
  var removeCartItemButtons = document.getElementsByClassName('btn-danger');
  for (var i = 0; i < removeCartItemButtons.length; i++) {
    var buttonRemove = removeCartItemButtons[i];
    buttonRemove.addEventListener('click', removeCartItem);
  }

  var quantityInputs = document.getElementsByClassName('cart-quantity-input');
  for (var j = 0; j < quantityInputs.length; j++) {
    var input = quantityInputs[j];
    input.addEventListener('change', quantityChanged);
  }
  var addToCartButtons = document.getElementsByClassName('shop-item-button');
  for (var k = 0; k < addToCartButtons.length; k++) {
    var buttonAdd = addToCartButtons[k];
    buttonAdd.addEventListener('click', addToCartClicked);
  }
}

function removeCartItem(event) {
  var buttonClicked = event.target;
  buttonClicked.parentElement.parentElement.remove();
  updateCartTotal();
}

function quantityChanged(event) {
  var input = event.target;
  if (isNaN(input.value) || input.value <= 0) {
    input.value = 1;
  }
  updateCartTotal();
}

function addToCartClicked(event) {
  var button = event.target;
  var shopItem = button.parentElement.parentElement;
  var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText;
  var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText;
  var imageSrc = shopItem.getElementsByClassName('shop-item-image')[0].src;
  addItemToCart(title, price, imageSrc);
  updateCartTotal();
}

function addItemToCart(title, price, imageSrc) {
  var cartRow = document.createElement('div');
  cartRow.classList.add('cart-row');
  var cartItems = document.getElementsByClassName('cart-items')[0];
  var cartItemNames = cartItems.getElementsByClassName('cart-item-title');
  for (var i = 0; i < cartItemNames.length; i++) {
    if (cartItemNames[i].innerText == title) {
      alert('Das Produkt wurde bereits hinzugefügt!');
      return;
    }
  }
  // users can only store three products per condition in shopping cart
  if (cartItemNames.length == 2) {
    alert('3 verschiedene Produkte wurden ausgewählt, bitte den Button "Weiter" am Ende der Webseite anklicken!');
    window.scrollTo(0, document.body.scrollHeight);
  }
  else if (cartItemNames.length == 3) {
    alert('3 verschiedene Produkte wurden bereits ausgewählt, bitte den Button "Weiter" am Ende der Webseite anklicken!');
    window.scrollTo(0, document.body.scrollHeight);
    return;
  }

  // adapted from https://www.youtube.com/watch?v=DULFs16I_z8
  var z = document.getElementById("updatecondition");
  if (cartItemNames.length <= 1) {
    z.style.display = "none";
  } else {
    z.style.display = "block";
  }
  // end of adaption

  var cartRowContents = `
  <div class="cart-item cart-column">
  <img class=cart-item-image" src="${imageSrc}" width="100" height="100" alt="product">
  <span class="cart-item-title">${title}</span>
  </div>
  <span class="cart-price cart-column">${price}</span>
  <div class="cart-quantity cart-column">
  <input class="cart-quantity-input" id="quantity" type="number" value="1">
  <button class="btn btn-remove" type="button">Entfernen</button>
  </div>`;
  cartRow.innerHTML = cartRowContents;
  cartItems.append(cartRow);
  cartRow.getElementsByClassName('btn-remove')[0].addEventListener('click', removeCartItem);
  cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged);
}

function updateCartTotal() {
  var cartItemContainer = document.getElementsByClassName('cart-items')[0];
  var cartRows = cartItemContainer.getElementsByClassName('cart-row');
  var total = 0;
  for (var i = 0; i < cartRows.length; i++) {
    var cartRow = cartRows[i];
    var priceElement = cartRow.getElementsByClassName('cart-price')[0];
    var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0];
    var price = parseFloat(priceElement.innerText.replace(',', '.'));
    var quantity = quantityElement.value;
    total = total + (price * quantity);
  }

  document.getElementsByClassName('cart-total-price')[0].innerText = total.toFixed(2) + '€';
}
// end of adaption

// adapted from https://www.youtube.com/watch?v=DULFs16I_z8
function toggleConsent() {
  var consent = document.getElementById("consent-form");
  if (consent.style.display == "block") {
    consent.style.display = "none";
  } else {
    consent.style.display = "block";
  }
}

function toggleInformation() {
  var info = document.getElementById("information-sheet");
  if (info.style.display == "block") {
    info.style.display = "none";
  } else {
    info.style.display = "block";
  }
}

function toggleNextButton() {
  var next = document.getElementById("updatecondition");
  if (next.style.display == "block") {
    next.style.display = "none";
  } else {
    next.style.display = "block";
  }
}
// end of adaption