<html>
<?php require "./view/includes/head.php" ?>
<?php require "./view/includes/session.php" ?>


<body>
<?php require "./view/includes/navbarLogout.php" ?>


<div class="container my-5">
    <form class="row g-3" action="payment.php">
        <div class="col-md-6">
            <label for="validationServer01" class="form-label">First name</label>
            <input type="text" class="form-control " id="validationServer01" name="firstname" required>

        </div>
        <div class="col-md-6">
            <label for="validationServer02" class="form-label">Last name</label>
            <input type="text" class="form-control " id="validationServer02" name="lastname" required>
        </div>

        <div class="col-md-12">
            <label for="validationServerAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="validationServerAddress" name="address" required>

        </div>

        <div class="col-md-8">
            <label for="validationServer03" class="form-label">City</label>
            <input type="text" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" name="city" required>

        </div>

        <div class="col-md-4">
            <label for="validationServer05" class="form-label">Zip</label>
            <input type="text" class="form-control" id="validationServer05" aria-describedby="validationServer05Feedback" name="zip" required>

        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input " type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                <label class="form-check-label" for="invalidCheck3">
                    Agree to terms and conditions
                </label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">To payment</button>
        </div>
    </form>
</div>


<?php require "./view/includes/footer.php" ?>
</body>

</html>
