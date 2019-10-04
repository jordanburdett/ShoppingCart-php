<?php
session_start();

// JUst need to finish this part!! and the remove should work!
$item = $_POST['0'];
$array = $_SESSION['items'];


$index = 0;
foreach($array as $values) {
    if ($values == item) {
        unset($array[$index]);
        $array = array_values($array);
        break;
    }
    $index++;
}

$_SESSION['items'] = $array;
?>