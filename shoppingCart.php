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
                    $value = (string)$value;
                    echo "<div class='card' id='$value' name='$value'>
                            <div class='card-body'>
                                    <p class='card-text'>$value

                                    <button type='button' class='ml-2 mb-1 close' style='color:red;' onclick='removeItem($value)'>
                                     <span aria-hidden='true'>&times;</span>
                                    </button>

                                    </p>
                            </div>
                          </div> <br>";
                }
            }

            ?>

        </div>
    </div>

    <script>
        /************
         * quick ajax request using jquery to store item to the session
         */

        function storeInfo(item) {
            $.post("storeInfo.php", {
                '0': item
            });

            $('.toast').toast({
                delay: 1000
            });
            $('.toast').toast('show');
        }

        function removeItem(item) {
            console.log("test");
            console.log(item.name);
            console.log(typeof(item));
           
            console.log(document.getElementById(item));

            $.post("storeInfo.php", {
                '0': (item.id)
            });


            console.log("Item removed: " + item);

            $("#" + item.id).hide();

        }
    </script>

</body>

</html>