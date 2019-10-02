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
        <div class="col-sm-10">
            <div class="shadow p-4 mb-4 bg-white">
                <div class="card">
                    <h6 class="card-body">Banana<button type="button" class="btn btn-primary" onclick="storeInfo('banana')"> Add to Cart</button></h6><br>
                </div>

                <div class="card">
                    <h6 class="card-body">mango <button type="button" class="btn btn-primary" onclick="storeInfo('mango')" > Add to Cart</button></h6><br>
                </div>

                <div class="card">
                    <h6 class="card-body">pear  <button type="button" class="btn btn-primary" onclick="storeInfo('pear')"  > Add to Cart</button></h6><br>
                </div>

                <div class="card">
                    <h6 class="card-body">apple <button type="button" class="btn btn-primary" onclick="storeInfo('apple')" > Add to Cart</button></h6><br>
                </div>

                <div class="card">
                    <h6 class="card-body">peach <button type="button" class="btn btn-primary" onclick="storeInfo('peach')" > Add to Cart</button></h6><br>
                </div>
            </div>
        </div>

        <div class="col-sm-2">
        <i class="fas fa-shopping-cart"><h4>Cart</h4></i>
            
        </div>

        <a href="ShowSession.php">show session</a>
    </div>

    <script src="javascript.js"></script>
</body>

</html>