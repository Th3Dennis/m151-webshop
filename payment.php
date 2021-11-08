<?php require "./view/includes/session.php" ?>
<html>
<?php require "./view/includes/head.php" ?>

<body>
<?php require "./view/includes/navbarLogout.php" ?>

<?php

$price = 0;
foreach ($_SESSION['cart'] as $product){
$price += $product['price'];
}

?>

<div class="container my-5">

    <h3 style="text-align: center">Hi <?= htmlspecialchars($_GET['firstname']) ?>!</h3>
    <h4 style="text-align: center">Please pay <?= $price?>.- to the following paypal account:</h4>

    <div class="row mt-2 mb-2">
        <div class="col"></div>
        <div class="col"><a href="https://www.paypal.me/th3dennis"><img src="./model/photos/paypal.png" class="w-100"></a></div>
        <div class="col">
        </div>
    </div>


    <form class="row g-3 mt-2" action="./controller/deleteCart.php">
        <div class="col">
        </div>
        <div class="col">
            <button class="btn btn-primary w-100 float-end" type="submit">Return to HomePage</button>
        </div>
        <div class="col"></div>
    </form>
</div>


<?php require "./view/includes/footer.php" ?>
</body>

</html>
