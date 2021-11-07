<?php
require "./controller/DatabaseController.php";

$products = getProducts();

?>

<div class="container mt-5">
    <p class="alert-danger">Note! Our products are highly limited and can only be bought once per costumer.</p>
    <div class="row row-cols-1 row-cols-md-3 g-4">




        <?php foreach ($products as $product) : ?>

            <div class="col">
                <div class="card">
                    <img src=<?= $product['path']?> class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['name']?></h5>
                        <h4><?= $product['price_chf'] . ".-"?> </h4>
                        <p class="card-text"><?= $product['description']?></p>
                    </div>
                    <div class="card-footer">
                        <form method="post" action="./controller/addToCart.php">
                            <input type="hidden" name="id" id="id" value=<?= $product['id']?> >
                            <input type="hidden" name="price" id="price" value=<?= $product['price_chf']?> >
                            <input type="hidden" name="description" id="description" value=<?= $product['description']?> >
                            <input type="hidden" name="path" id="path" value=<?= $product['path']?> >
                            <input type="hidden" name="name" id="name" value=<?= $product['name']?> >
                            <button id="addItem" class="btn btn-success">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    </div>
</div>
