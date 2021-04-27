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

      <link rel="stylesheet" href="styles.css">
    <title>Hello, world!</title>
    <style>
      .navbar {

         background-color:#D50000;
         color: white;
         z-index: 5000;
     }


     .btn {
       background-color: white;
       color: black;

     }

     .card {
     margin: 20px;

     float: none;
     margin-bottom: 10px;
     }

     .page-footer{
       background-color:black;
     }

     .bi{
       color:white;
     }

     .footer-copyright{
       color:white;
     }

     .mt-6 {
margin-top: 150px !important;
     }


      /* body1 {
    background:white;
    min-height: 100vh;
    vertical-align: middle;
    display: flex;
    font-family: sans-serif;
    font-size: 0.8rem;
    font-weight: bold
} */



      .title {
          margin-bottom: 5vh
      }

      .card1 {
          margin:auto;
          margin-top:50px;
          max-width: 950px;
          width: 90%;
          box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
          border-radius: 1rem;
          border: transparent

      }

      @media(max-width:767px) {
          .card {
              margin: 3vh auto
          }
      }

      .cart {
          background-color: #fff;
          padding: 4vh 5vh;
          border-bottom-left-radius: 1rem;
          border-top-left-radius: 1rem
      }

      @media(max-width:767px) {
          .cart {
              padding: 4vh;
              border-bottom-left-radius: unset;
              border-top-right-radius: 1rem
          }
      }

      .summary {
          background-color: #D50000;
          border-top-right-radius: 1rem;
          border-bottom-right-radius: 1rem;
          padding: 4vh;
          color: rgb(65, 65, 65)
      }

      @media(max-width:767px) {
          .summary {
              border-top-right-radius: unset;
              border-bottom-left-radius: 1rem
          }
      }

      .summary .col-2 {
          padding: 0
      }

      .summary .col-10 {
          padding: 0
      }

      .row {
          margin: 0
      }

      .title b {
          font-size: 1.5rem
      }

      .main {
          margin: 0;
          padding: 2vh 0;
          width: 100%
      }



      a {
          padding: 0 1vh
      }

      .close {
          margin-left: auto;
          font-size: 0.7rem
      }

      img {
          width: 3.5rem
      }

      .back-to-shop {
          margin-top: 4.5rem
      }

      h5 {
          margin-top: 4vh
      }

      hr {
          margin-top: 1.25rem
      }

      form1 {
          padding: 2vh 0
      }

      select {
          border: 1px solid rgba(0, 0, 0, 0.137);
          padding: 1.5vh 1vh;
          margin-bottom: 4vh;
          outline: none;
          width: 100%;
          background-color: rgb(247, 247, 247)
      }




      input1 {
          border: 1px solid rgba(0, 0, 0, 0.137);
          padding: 1vh;
          margin-bottom: 4vh;
          outline: none;
          width: 100%;
          background-color: rgb(247, 247, 247)
      }

      input1:focus::-webkit-input-placeholder {
          color: transparent
      }

      .btn1 {
          background-color: #000;
          border-color: #000;
          color: white;
          width: 100%;
          font-size: 0.7rem;
          margin-top: 4vh;
          padding: 1vh;
          border-radius: 0
      }

      .btn1:focus {
          box-shadow: none;
          outline: none;
          box-shadow: none;
          color: white;
          -webkit-box-shadow: none;
          -webkit-user-select: none;
          transition: none
      }

      .btn1:hover {
          color: white
      }

      a {
          color: blue
      }

      a:hover {
          color: black;
          text-decoration: none
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
              <button class="btn mx-2" type="submit">Search</button>
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

<!--cart-->
    <div class="card1">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Shopping Cart</b></h4>
                    </div>

                </div>
            </div>
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/1GrakTl.jpg"></div>
                    <div class="col">
                        <div class="row text-muted">Toys You Rented</div>
                        <div class="row">{{$toy->toy_name}}</div>
                    </div>


                </div>
            </div>
            <!-- <div class="row">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/ba3tvGm.jpg"></div>
                    <div class="col">
                        <div class="row text-muted">Toys for pets</div>
                        <div class="row">Toy Name</div>
                    </div>


                </div>
            </div>
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/pHQ3xT3.jpg"></div>
                    <div class="col">
                        <div class="row text-muted">Toys for children with special needs</div>
                        <div class="row">Toy Name</div>
                    </div>

                </div>
            </div> -->
            <div class="back-to-shop"><a href="index.html"><span class="text-muted">&leftarrow;Back to Home</span></a></div>
        </div>
        <div class="col-md-4 summary">
            <div>
                <h5><b>Summary</b></h5>
            </div>
            <hr>

            <form1>
                <p>Subscription Plans</p> <select>
                    <option class="text-muted">Weekly-Plan-₹ 100
                    </option>
                    <option class="text-muted">Monthly-Plan-₹300
                    </option>
                    <option class="text-muted">Quarterly-Plan-₹600
                    </option>
                </select>

            </form1>
            <form1>
                <p>PAYMENT</p> <select>
                    <option class="text-muted">UPI</option>
                    <option class="text-muted">Cash On Delivery</option>


                </select>

            </form1 action = "details/cart/{{$toy->id}}" method ="post">
            @csrf
            @method('PUT')
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">

            </div><a href="/sucess"><button class="btn1">CHECKOUT</button></a>
          </div>
    </div>
</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body1>
</html>
