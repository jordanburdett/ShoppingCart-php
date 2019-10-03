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



    <div class="jumbotron">
        <div class="container-fluid">
            <h1 class="display-4" style="text-align:center;">Order Here!</h1>
        </div>
    </div>
    <div class="fixed-top">
        <div class="toast" id="myToast" style="position: absolute; top: 0; right: 0;">
            <div class="toast-header">
                <strong class="mr-auto"><i class="fa fa-grav"></i> Item Added to Cart</strong>

                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                <div>Click checkout to purchase items</div>
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
                                <button type="button" value="Banana" class="btn btn-primary" id="add" onclick="storeInfo('Banana')"> Add to Cart</button>
                            </div>
                        </div>
                    </div> <br>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Mango</h4>
                            <p class="card-text">A delicious fruit</p>

                            <div class="float-sm-right">
                                <button type="button" value="Mango" class="btn btn-primary" id="add" onclick="storeInfo('Mango')"> Add to Cart</button>
                            </div>
                        </div>
                    </div><br>

                    <div class="card">

                        <div class="card-body">
                            <h4 class="card-title">Pear</h4>
                            <p class="card-text">A delicious fruit</p>

                            <div class="float-sm-right">
                                <button type="button" value="Pear" class="btn btn-primary" id="add" onclick="storeInfo('Pear')"> Add to Cart</button>
                            </div>
                        </div>
                    </div><br>

                    <div class="card">

                        <div class="card-body">
                            <h4 class="card-title">Apple</h4>
                            <p class="card-text">A delicious fruit</p>

                            <div class="float-sm-right">
                                <button type="button" value="Apple" class="btn btn-primary" id="add" onclick="storeInfo('Apple')"> Add to Cart</button>
                            </div>
                        </div>
                    </div><br>

                    <div class="card">

                        <div class="card-body">
                            <h4 class="card-title">Peach</h4>
                            <p class="card-text">A delicious fruit</p>
                            <div class="float-sm-right">
                                <button type="button" value="Peach" class="btn btn-primary" id="add" onclick="storeInfo('Peach')"> Add to Cart</button>
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

        function storeInfo(item) {
            $.post("storeInfo.php", {
                '0': item
            });

            $('.toast').toast({
                delay: 1000
            });
            $('.toast').toast('show');
        }
    </script>
</body>

</html>