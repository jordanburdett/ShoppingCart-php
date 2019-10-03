<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Order page</title>
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

<div class="toast">
        <div class="position-absolute w-100 d-flex flex-column p-4">
            <div class="toast ml-auto show" data-delay="10000" data-autohide="false" role="alert">
                <div class="toast-header">
                    Item Added to Cart
                </div>
                <div class="toast-body">
                    Click Checkout to Finish Your Purchase
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron">
        <div class="container-fluid">
            <h1 class="display-4" style="text-align:center;">Order Here!</h1>
        </div>
    </div>

    <div class="toast">
        <div class="position-absolute w-100 d-flex flex-column p-4">
            <div class="toast ml-auto show" data-delay="10000" data-autohide="false" role="alert">
                <div class="toast-header">
                    Item Added to Cart
                </div>
                <div class="toast-body">
                    Click Checkout to Finish Your Purchase
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="shadow p-4 mb-4 bg-white">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Banana</h4>
                            <p class="card-text">A delicious fruit</p>
                            <div class="float-sm-right">
                                <button type="button" value="Banana" class="btn btn-primary" id="add"> Add to Cart</button>
                            </div>
                        </div>
                    </div> <br>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Mango</h4>
                            <p class="card-text">A delicious fruit</p>

                            <div class="float-sm-right">
                                <button type="button" value="Mango" class="btn btn-primary" id="add"> Add to Cart</button>
                            </div>
                        </div>
                    </div><br>

                    <div class="card">

                        <div class="card-body">
                            <h4 class="card-title">Pear</h4>
                            <p class="card-text">A delicious fruit</p>

                            <div class="float-sm-right">
                                <button type="button" value="Pear" class="btn btn-primary" id="add"> Add to Cart</button>
                            </div>
                        </div>
                    </div><br>

                    <div class="card">

                        <div class="card-body">
                            <h4 class="card-title">Apple</h4>
                            <p class="card-text">A delicious fruit</p>

                            <div class="float-sm-right">
                                <button type="button" value="Apple" class="btn btn-primary" id="add"> Add to Cart</button>
                            </div>
                        </div>
                    </div><br>

                    <div class="card">

                        <div class="card-body">
                            <h4 class="card-title">Peach</h4>
                            <p class="card-text">A delicious fruit</p>
                            <div class="float-sm-right">
                                <button type="button" value="Peach" class="btn btn-primary" id="add"> Add to Cart</button>
                            </div>
                        </div>
                    </div><br>
                </div>
            </div>


            <div class="col-sm-3">
                <a href="shoppingCart.php" style="color:black;">
                    <div class="shadow p-4 mb-4 bg-white">
                        <ul class="fa-ul">

                            <li><span class="fa-li"><i class="fas fa-shopping-cart fa-2x"></i></span>
                                <div style="padding-left:10%;">
                                    <a href="shoppingCart.php" class="btn btn-primary">Checkout</a><span>
                            </li>
                    </div>
                    </ul>
            </div>
            </a>
        </div>
    </div>
    </div>

    



    <a href="ShowSession.php">show session</a>
    </div>



    <script>
        /************
         * quick ajax request using jquery to store item to the session
         */
        $(document).ready(function() {
            $("#add").click(function() {
                storeInfo(this.value)
                $('.toast').toast('show');
            });
        });

        function storeInfo(item) {
            $.post("storeInfo.php", {
                '0': item
            });
        }
    </script>
</body>

</html>