<?php
session_start();

// JUst need to finish this part!! and the remove should work!
$item = $_POST['0'];
$items = $_SESSION['items'];

vardump($items);


for ($i = 0; $i < count($items); $i++) {
    if ($values == item) {
        unset($items[$i]);
        $items = array_values($items);
        echo "found";
        break;
    }
}

$_SESSION['items'] = $items;
?>