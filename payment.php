<html>
<?php require "./view/includes/session.php" ?>
<?php require "./view/includes/head.php" ?>



<body>
<?php require "./view/includes/navbarLogout.php" ?>


<div class="container my-5">

    <h2 style="text-align: center">Please pay the amount to the following paypal account:</h2>

    <div class="row">
        <div class="col"></div>
        <div class="col"><img src="./model/photos/paypal.png" class="w-100"></div>
        <div class="col"></div>
    </div>

    <form class="row g-3">
        <div class="col"></div>
        <input type="hidden" value="<?= $_REQUEST['firstname'] ?>">
        <div class="col">
            <button class="btn btn-primary w-100" type="submit">Return to HomePage</button>
        </div>
        <div class="col"></div>
    </form>
</div>


<?php require "./view/includes/footer.php" ?>
</body>

</html>
