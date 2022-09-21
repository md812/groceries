<!-- log out user script -->
<?php
session_start();
session_destroy();

// do not cache pages, adapted from https://stackoverflow.com/questions/1037249/how-to-clear-browser-cache-with-php
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
// end of adaption

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
