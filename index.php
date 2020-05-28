<?php
function GET($key) {
    if (!isset($_GET[$key])) return NULL;
    return preg_replace ("/[^a-zA-ZА-Яа-я0-9\s]/","",strip_tags($_GET[$key]));;
}
function POST($key) {
    if (!isset($_POST[$key])) return NULL;
    return preg_replace ("/[^a-zA-ZА-Яа-я0-9\s]/","",strip_tags($_POST[$key]));;
}

$available = ['home', 'catalog', 'info'];

require("header.php");
$page = GET("page");
if($page === NULL || !in_array($page, $available)){
    echo 404;
} else {
    require($page . '.php');
}
require("footer.php");