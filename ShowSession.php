<?php
    session_start();

    // See what we currently have stored
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';

?>