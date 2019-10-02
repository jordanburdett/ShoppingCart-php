<?php
/***
 * This script will store
 */
    session_start();

    // add the item to the cart storing it in the session.
    foreach ($_POST as $key => $value) {
        array_push($_SESSION['items'], $value);
    }


?>