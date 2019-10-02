<?php
/***
 * This script will store
 */
    session_start();

    $sessionArray = $_SESSION['items'];

    if ($sessionArray == null) {
        $sessionArray = array($_POST['0']);
    }
    else {
        array_push($sessionArray, $_POST['0']);
    }

    $_SESSION['items'] = $sessionArray;

?>