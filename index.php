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
</head>

<body>
    <div class="container-fluid">
        <h1 class="display-4" style="text-align:center;">Order Here!</h1>
    </div>


    <div class="container">
        <div class="row">
            <div class="col">
                <div class="shadow p-4 mb-4 bg-white">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Banana</h4>
                            <p class="card-text"  >A delicious fruit</p>
                            <div class="float-sm-right">
                                <button type="button" class="btn btn-primary" onclick="storeInfo('banana')"> Add to Cart</button>
                            </div>
                        </div>
                    </div> <br>

                    <div class="card">      
                        <div class="card-body">
                            <h4 class="card-title">Mango</h4>
                            <p class="card-text">A delicious fruit</p>

                            <div class="float-sm-right">
                                <button type="button" class="btn btn-primary" onclick="storeInfo('mango')" > Add to Cart</button>
                            </div>
                        </div>
                    </div><br>

                    <div class="card">
                     
                        <div class="card-body">
                            <h4 class="card-title">Pear</h4>
                            <p class="card-text">A delicious fruit</p>

                            <div class="float-sm-right">
                                <button type="button" class="btn btn-primary" onclick="storeInfo('pear')"  > Add to Cart</button>
                            </div>
                        </div>
                    </div><br>

                    <div class="card">
                                   
                        <div class="card-body">
                            <h4 class="card-title">Apple</h4>
                            <p class="card-text">A delicious fruit</p>

                            <div class="float-sm-right">
                                <button type="button" class="btn btn-primary" onclick="storeInfo('apple')" > Add to Cart</button>
                            </div>
                        </div>
                    </div><br>

                    <div class="card">
                     
                        <div class="card-body">
                        <h4 class="card-title">Peach</h4>
                        <p class="card-text">A delicious fruit</p>
                            <div class="float-sm-right">
                                <button type="button" class="btn btn-primary" onclick="storeInfo('peach')" > Add to Cart</button>
                            </div>
                        </div>
                    </div><br>
                </div>
            </div>

            
            <div class="col-sm-3" id="cart">
                <a href="shoppingCart.php" style="color:black;">
                    <div class="shadow p-4 mb-4 bg-white">
                        <i class="fas fa-shopping-cart"></i>
                        <h4 style="text-align:center;">Cart</h4>
                    </div> 
                </a>
            </div>
            

        </div>
    </div>  

        <a href="ShowSession.php">show session</a>
</div>

    <script src="javascript.js"></script>
</body>

</html>