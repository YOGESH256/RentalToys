<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css'>

    <title>Khilona on Rent</title>

    <style>

      body {

    }

    .card {
        border: none
    }

    .product {
        background-color: #eee
    }

    .brand {
        font-size: 13px
    }

    .act-price {
        color: red;
        font-weight: 700
    }

    .dis-price {
        text-decoration: line-through
    }

    .about {
        font-size: 14px
    }

    .color {
        margin-bottom: 10px
    }

    label.radio {
        cursor: pointer
    }

    label.radio input {
        position: absolute;
        top: 0;
        left: 0;
        visibility: hidden;
        pointer-events: none
    }

    label.radio span {
        padding: 2px 9px;
        border: 2px solid #ff0000;
        display: inline-block;
        color: #ff0000;
        border-radius: 3px;
        text-transform: uppercase
    }

    label.radio input:checked+span {
        border-color: #D50000;
        background-color: #D50000;
        color: #fff
    }

    .btn-danger {
        background-color: ##D50000 !important;
        border-color: ##D50000 !important
    }

    .btn-danger:hover {
        background-color: #da0606 !important;
        border-color: #da0606 !important
    }

    .btn-danger:focus {
        box-shadow: none
    }

    .cart i {
        margin-right: 10px
    }

    .navbar {

       background-color:#D50000;
       color: white;
       z-index: 5000;
   }



    .nav-pills {
      display: table !important;
      width: 100%
    }

    .nav-pills .nav-link {
      border-radius: 0px;
      border-bottom: 1px solid #0d6efd
    }

    .nav-item {
      display: table-cell;


    }



    .btn {
    background-color: white;
    color: black;
    }

    .btn-dark {

      background-color: #0d6efd;
      border-color: #0d6efd
    }

    hr{
      margin-left:50px;
      margin-right:50px;
        }
        .mt-6 {
  margin-top: 80px !important;
        }
    </style>
  </head>

  <body>



    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Khilona on Rent</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item mx-2">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
            <li class="nav-item dropdown mx-2">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="catalog.html">Toys</a></li>
                  <li><a class="dropdown-item" href="catalog.html">Toys for children with special needs</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="catalog.html">Toys for pets</a></li>
                </ul>
              </li>


              <li class="nav-item dropdown mx-2">
                  <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Subscriptions
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Weekly Plan</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Monthly Plan</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Quarterly Plan</a></li>
                  </ul>
                </li>

              </ul>
            <form class="d-flex col-xl-3">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn mx-2"  type="submit">Search</button>
            </form>


            <div class="dropdown">
            <button type="button" class="btn btn-secondary btn-light" data-toggle="dropdown" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
              <i class="fa fa-user mx-0" style="color:black  !important;"></i>
            </button>

            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuOffset">
              <li><a class="dropdown-item" href="#">View Profile</a></li>
              <li><a class="dropdown-item" href="#">View Orders</a></li>
              <li><a class="dropdown-item" href="#">Payment</a></li>
            </ul>

          </div>

        </div>
        </div>


    </nav>





    <div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center"> <img id="main-image" src="https://source.unsplash.com/400x350"/> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i><a href="catalog.html"><span class="mx-2">Back</span></a> </div> <i class="fa fa-shopping-cart text-muted"></i>
                            </div>
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Toys</span>
                                <h5 class="text-uppercase">{{$toy->toy_name}}</h5>
                                <div class="price d-flex flex-row align-items-center">
                                  
                                </div>
                            </div>
                            <p class="about"> Availiablity : {{$toy->avail}}</p>
                            <div class="sizes mt-3">
                                <p>{{$toy->category_type_2}}</p>
                            </div>
                            <div class="cart mt-6 align-items-center"><a href="cart/{{$toy->id}}"> <button class="btn btn-danger text-uppercase mr-2 px-4">rent now</button></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
