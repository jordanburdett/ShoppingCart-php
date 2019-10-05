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
    <div class="shadow p-4 mb-4 bg-white">
        <div class="container">
            <h1>Order recieved!</h6>
            <ul>
                <?php
                $items = $_SESSION['items'];

                foreach ($items as $item) {
                    echo "<li>$item</li>";
                }
                ?>
                <p>Your items will be shipped to
                    <?php

                    $city = $_POST['city'];
                    $state = $_POST['state'];
                    $areaCode = $_POST['areaCode'];

                    echo "$city, $state $areaCode";
                    ?>
                </p>

            </ul>
        </div>
    </div>


</body>

</html>

<?php
    session_destroy();
?>