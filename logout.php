<!-- log out user script -->
<?php
session_start();
session_destroy();

require_once('includes/conditions.php');
wh_log('logged out ' . $_SESSION['username'] . "\r\n");

// unset all cookies, adapted from https://stackoverflow.com/questions/2310558/how-to-delete-all-cookies-of-my-website-in-php
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach ($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time() - 1000);
        setcookie($name, '', time() - 1000, '/');
    }
}
// end of adaption

header('Location: index.php');
exit;
