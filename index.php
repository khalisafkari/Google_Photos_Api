<?php
include "apis.php";
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); 
if (!empty($_GET['id']) && isset($_GET['id'])) {
// $udkux = $_SERVER['HTTP_REFERER'];
// if (strpos($udkux, 'joneskun.com') !== false) {
// } else {
// }

$getGP = getPhotoGoogle($_GET['id']);
echo $getGP;
} else {
    exit('No Id provided!');
}
?>