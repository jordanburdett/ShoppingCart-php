<?php
session_start();

// JUst need to finish this part!! and the remove should work!
$item = $_POST['0'];
$items = $_SESSION['items'];

$item = "Banana";

var_dump($items);


for ($i = 0; $i < count($items); $i++) {
    if ($values == item) {
        unset($items[$i]);
        $items = array_values($items);
        echo "found";
        break;
    }
}

var_dump($items);

$_SESSION['items'] = $items;
?>