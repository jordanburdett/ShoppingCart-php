<?php
session_start();

// JUst need to finish this part!! and the remove should work!
$item = $_POST['0'];
$items = $_SESSION['items'];

$item = "Banana";

var_dump($items);
echo "count: " . count($items) . "<br>";
echo "Looking for: $item<br>";
for ($i = 0; $i < count($items); $i++) {

    echo "index: $i<br>";
    echo "current: " . $items[$i] . "<br>";


    if ($items[$i] == $item) {
        unset($items[$i]);
        $items = array_values($items);
        echo "found";
        break;
    }
}

var_dump($items);

$_SESSION['items'] = $items;
?>