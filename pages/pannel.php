<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../Styles/style.css">
    <title>Document</title>
</head>

<body>
    <div class="nav">
        <nav class="navbar d-flex justify-content-center">
            <div class="container ">
                <div>
                    <a class="navbar-brand" href="../index.php">
                        LOGO
                    </a>
                </div>
                <div class="search  ">
                    <input class="search-txt" type="text" placeholder="Search">
                    <a class="search-btn" href="#">
                        <i class="fas fa-search"></i></a>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="pannel">
                        <a href="#">
                            <i class="fas fa-shopping"><span id="nbr-product">0</span></i>
                        </a>
                    </div>
                    <div class="connection ">
                        <a href="#">
                            <i class="fas fa-user"><span> connection</span></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!--Section: Block Content-->
    <section class="d-flex flex-row justify-content-between">

        <!--Grid row-->
        <div class="products col-lg-7">
            <div class="">

                <!-- Card -->
                <div class="mb-3">
                    <div class="pt-4 wish-list">

                        <h5 class="mb-4">Cart (<span>2</span> items)</h5>

                        <div class="row mb-4">
                            <div class="col-md-5 col-lg-3 col-xl-3">
                                <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                    <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                                    <a href="#!">

                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-9 col-xl-9">
                                <div class="mr-3">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5>Blue denim shirt</h5>

                                            <p class="mb-3 text-muted text-uppercase small">Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Eveniet facilis consectetur tenetur
                                                deserunt nemo et, laudantium ipsa? Dignissimos mollitia et nam, numquam
                                                corporis magni repudiandae ullam? Exercitationem qui quia perspiciatis?
                                            </p>
                                        </div>
                                        <div class="mt-5"></div>
                                        <div class="d-flex flex-column">
                                            <p>Quentity:</p>
                                            <div class="def-number-input number-input safari_only mb-0 w-100 d-flex flex-row">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="fas fa-minus"></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="fas fa-plus"></button>
                                            </div>
                                            <small id="passwordHelpBlock" class="form-text text-muted text-center">
                                            </small>
                                        </div>
                                    </div>
                                    <div class=" d-flex justify-content-between  d-flex align-items-end" style=" margin-top: 40px;">
                                        <div>
                                            <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3"><i class="fas fa-trash-alt mr-1"></i> Remove item </a>
                                            <a href="#!" type="button" class="card-link-secondary small text-uppercase"><i class="fas fa-heart mr-1"></i> Move to wish list </a>
                                        </div>
                                        <p class="mb-0"><span><strong id="summary">$17.99</strong></span></p class="mb-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">


                    </div>
                </div>
            </div>
        </div>
        <div class="totales col-lg-4">


            <!-- Card -->
            <div class="mb-3">
                <div class="pt-4">

                    <h5 class="mb-3">The total amount of</h5>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                            Temporary amount
                            <span>$25.98</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            Shipping
                            <span>Gratis</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                            <div>
                                <strong>The total amount of</strong>
                                <strong>
                                    <p class="mb-0">(including VAT)</p>
                                </strong>
                            </div>
                            <span><strong>$53.98</strong></span>
                        </li>
                    </ul>

                    <button type="button" class="btn btn-primary btn-block">go to checkout</button>

                </div>

                <!-- Card -->

                <!-- Card -->
                <div class="mb-3">
                    <div class="pt-4">

                        <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Add a discount code (optional)
                            <span><i class="fas fa-chevron-down pt-1"></i></span>
                        </a>

                        <div class="collapse" id="collapseExample">
                            <div class="mt-3">
                                <div class="md-form md-outline mb-0">
                                    <input type="text" id="discount-code" class="form-control font-weight-light" placeholder="Enter discount code">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card -->

            </div>
        </div>











    </section>
    <!--Section: Block Content-->
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../scriptes/panier.js"></script>

</body>

</html>