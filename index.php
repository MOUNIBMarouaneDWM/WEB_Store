<?php
include 'phpScript/connection.php';
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
    <div class="modal fade p-4" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content carte">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-hover w-100">
                        <thead>
                            <tr>
                                <th scope="col">Produit</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Quantité</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>delet</td>
                            </tr> -->
                        </tbody>

                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Valider</button>
                </div>
            </div>
        </div>
    </div>




          <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form_inputs">
                      <div class="form-group">
                        <label for="login-email" class="col-form-label">Email:</label>
                        <input type="text" class="form-control" id="login-email" value="" required>
                      </div>
                      <div class="form-group">
                        <label for="password" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" value="" id="password" required>
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success login" >Login</button>
                </div>
                </form>
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

                    <a class="nom_login" data-toggle="modal" data-target="#loginModal">
                          <i><img src="icons/customer_30px.png" alt="" srcset=""><span>compte</span></i>
                        </a>

                    </div>
                </div>
            </div>
        </nav>
    </div>



    <!-- Main -->
    <div class="container-fluid">
      <div class="row">
      <div class="col-12 col-lg-7 py-4  d-flex align-items-center justify-content-center">

      <a href="#" class="text-primary prix_down mr-3" data-toggle="tooltip" data-placement="top" title="Decroissant"><i class="fas fa-sort-amount-up-alt"></i></a>
      <a href="#" class="text-primary prix_up"><i class="fas fa-sort-amount-down" data-toggle="tooltip" data-placement="top" title="Croissant"></i></a>

      </div>
      </div>
        <div class="row ml-2">
            <div class="col-12 col-lg-3">
                <div class="list-group w-100 category_liste">

                    <a class="list-group-item list-group-item-action bg-primary text-white" id="list-home-list" href="#list-home"
                        role="tab" aria-controls="home"><i class="fas fa-bars pr-3"></i>Category</a>

                </div>
            </div>


        <div class="col-12 col-lg-9">
            <div class="container">
                <div class="row produit_liste">

                </div>

            </div>
        </div>
        </div>
    </div>


            <!-- <div class="col-md-9">
                <div class="row g-2 produit-container" data-aos="fade-up" data-aos-delay="200">
                 
                        <div class="col-md-4 produit-item portfolio-lightbox">
                            <div class="product py-4">
                                <div class="text-center"><img src="" width="200px" height="200px">
                                </div>
                                <div class="about text-center">
                                    <h5 height="30px"></h5>
                                    <span></span>
                                </div>
                                <div class="cart-button mt-3 px-3 d-flex justify-content-center align-items-center">
                                    <button class="btn btn-primary text-uppercase">Add to cart</button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row g-2 produit-container" data-aos="fade-up" data-aos-delay="200">
                 
                        <div class="col-md-4 produit-item portfolio-lightbox">
                            <div class="product py-4">
                                <div class="text-center"><img src="" width="200px" height="200px">
                                </div>
                                <div class="about text-center">
                                    <h5 height="30px"></h5>
                                    <span></span>
                                </div>
                                <div class="cart-button mt-3 px-3 d-flex justify-content-center align-items-center">
                                    <button class="btn btn-primary text-uppercase">Add to cart</button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row g-2 produit-container" data-aos="fade-up" data-aos-delay="200">
                 
                        <div class="col-md-4 produit-item portfolio-lightbox">
                            <div class="product py-4">
                                <div class="text-center"><img src="" width="200px" height="200px">
                                </div>
                                <div class="about text-center">
                                    <h5 height="30px"></h5>
                                    <span></span>
                                </div>
                                <div class="cart-button mt-3 px-3 d-flex justify-content-center align-items-center">
                                    <button class="btn btn-primary text-uppercase">Add to cart</button>
                                </div>
                            </div>
                        </div>
                </div>
            </div> -->


        </div>
    </div>




    <script src="https://kit.fontawesome.com/eeae5646a1.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>



    <script src="script.js"></script>

</body>

</html> 
