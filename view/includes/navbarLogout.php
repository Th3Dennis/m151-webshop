<div class="navbarLogin">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./overview.php">DenShop</a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./overview.php">Overview</a>
                    </li>
                </ul>
                <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                    Cart
                </button>
                <a href="./controller/logoutController.php">
                    <button class="btn btn-outline-light" type="button">Logout</button>
                </a>
            </div>
        </div>
    </nav>
</div>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <?php if (isset($_SESSION['cart'])): ?>
                    <ul class="list-group">
                        <?php foreach ($_SESSION['cart'] as $product) : ?>
                            <li class="list-group-item"><?= $product['name'] . " - " . $product['price'] . ".-" ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="./checkout_address.php">
                    <button id="addItem" class="btn btn-success">Checkout</button>
                </form>
            </div>
        </div>
    </div>
</div>