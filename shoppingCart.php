<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/5990b2791e.js" crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
</head>

<body>
    <div class="jumbotron">
        <div class="container-fluid">
            <h1 class="display-4" style="text-align:center;">Cart</h1>
        </div>
    </div>

    <div class="container">
        <div class="shadow p-4 mb-4 bg-white">

            <?php

            $sessionArray = $_SESSION['items'];

            if ($sessionArray == NULL) {
                echo "<div class='card'>
                            <div class='card-body'>
                                <h4 class='card-title'>Cart Empty!</h4>
                                    <p class='card-text'><a href='index.php'>Go back and buy some items!</a></p>
                            </div>
                        </div> <br>";
            } else {

                foreach ($sessionArray as $value) {
                    echo "<div class='card'>
                            <div class='card-body'>
                                    <p class='card-text'>$value</p>
                                    
                                    <button type='button' class='ml-2 mb-1 close'>
                                     <span aria-hidden='true'>&times;</span>
                                    </button>
                            </div>
                          </div> <br>";
                }
            }

            ?>

        </div>
    </div>


</body>

</html>