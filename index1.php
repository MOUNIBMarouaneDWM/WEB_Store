<?php
include 'phpScript/connection.php'
?>
<!Doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce TP</title>
    <!-- file Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Assets/Css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/Css/Style.css">
</head>

<body>
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>delet</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Valider</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Header -->
    <div class="navbar">
        <nav class="navbar d-flex justify-content-center">
            <div class="container">
                <div>
                    <a class="navbar-brand" href="#">
                        E-Commerce
                    </a>
                </div>
                <div class="search">
                    <input class="search-txt" type="text" placeholder="Search">
                    <a class="search-btn" href="#">
                        <i class="fas fa-search"></i></a>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="pannel">
                        <a href="#" data-toggle="modal" data-target="#exampleModal">
                            <!-- Button trigger modal -->
                            <i class=""><img src="icons/shopping_basket_30px.png" alt="" srcset=""><span id="nbr-product">0</span></i>
                        </a>

                    </div>
                    <div class="connection ">
                        <a href="#">
                            <i><img src="icons/customer_30px.png" alt="" srcset=""><span> connection</span></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Main -->
    <div class="container-fluid mt-5 mb-5">
        <div class="row g-2">
            <div class="col-md-3">
                <div class="t-products p-2">
                    <h6 class="text-uppercase">Catalogues</h6>
                </div>
                <div class="processor p-2">
                    <div class="heading d-flex justify-content-between align-items-center">
                    </div>
                    <?php
                    $sql_category = $database_boutique->prepare("SELECT c.id_cat,name, COUNT(ref) AS 'nbr' from category c JOIN produit_cat p ON c.id_cat = p.id_cat GROUP by c.id_cat,name");
                    $sql_category->execute();
                    $i = 0;
                    foreach ($sql_category as $result) { ?>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="form-check " id="produit-flters">
                                <input class="filter-active" class="form-check-input" type="checkbox" value="" id="<?php echo "" . $i ?>">
                                <input type="text" value="<?= $result['id_cat']; ?>" hidden>
                                <label class="form-check-label" for="<?php echo "" . $i ?>">
                                    <?php echo "" . $result['name'] ?> </label>
                            </div>
                            <span><?php echo "" . $result['nbr'] ?></span>
                        </div>
                    <?php
                        $i++;
                    } ?>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row g-2 produit-container " data-aos="fade-up" data-aos-delay="200">
                    <?php
                    // et list produit from database
                    $sql_produit = $database_boutique->prepare("SELECT p.name,p.imageLink,p.price,p.shipping,p.description,c.id_cat 
                    FROM produit p 
                    JOIN produit_cat pc 
                    ON p.ref = pc.ref 
                    JOIN category c 
                    ON c.id_cat = pc.id_cat
                    ");
                    $sql_produit->execute();
                    ?>
                    <?php
                    foreach ($sql_produit as $result) {
                    ?>
                        <div class="col-md-4 produit-item portfolio-lightbox">
                            <div class="product py-4 <?php echo "" . $result['id_cat'] ?>">
                                <div class="text-center"> <img src="<?php echo "" . $result['imageLink']; ?>" width="200px" height="200px">
                                </div>
                                <div class="about text-center">
                                    <h5 height="30px"><?php echo "" . $result['name']; ?></h5>
                                    <span><?php echo "" . $result['price']; ?></span>
                                </div>
                                <div class="cart-button mt-3 px-3 d-flex justify-content-center align-items-center">
                                    <button class="btn btn-primary text-uppercase">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>



    <script src="Assets/Js/all.min.js"></script>
    <script src="Assets/Js/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="Assets/Js/main.js"></script>
    <script src="script.js"></script>

</body>

</html>