// <!-- js for toggle menu -->
var MenuItems = document.getElementById("MenuItems");
MenuItems.style.maxHeight = "0px";

function menutoggle() {
  if (MenuItems.style.maxHeight == "0px") {
    MenuItems.style.maxHeight = "200px";
  } else {
    MenuItems.style.maxHeight = "0px";
  }
}

// Modal for Images adapted from https://www.w3schools.com/howto/howto_css_modal_images.asp and https://stackoverflow.com/questions/47798971/several-modal-images-on-page
// Get the modal
var modal = document.getElementById("modal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var images = document.getElementsByClassName("productImg");
var modalImg = document.getElementById("img");
var captionText = document.getElementById("caption");

// Go through all of the images with our custom class
for (var i = 0; i < images.length; i++) {
  var img = images[i];
  // and attach our click listener for this image.
  img.onclick = function (evt) {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.title;
  }
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
}