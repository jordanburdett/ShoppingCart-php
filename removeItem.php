<?php
session_start();


$item = $_POST['0'];
$array = $_SESSION['items'];

$indexToRemove = array_search($item, $array);
unset($array[$indexToRemove]);
?>