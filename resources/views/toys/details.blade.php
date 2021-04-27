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
    <title>Khilona on Rent</title>

<style>
    h3{
      /* margin-top: 80px; */
      font-size: 35px;
      margin-bottom: 20px;
    }

    .navbar {

       background-color:#D50000;
       color: white;
       z-index: 5000;
   }



    .btn {
    background-color: white;
    color: black;
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

    .divider{
      margin-top: 50px;
      margin-bottom: 20px;
      opacity: 0.1;
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
                  <li><a class="dropdown-item" href="#">Toys</a></li>
                  <li><a class="dropdown-item" href="#">Toys for children with special needs</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Toys for pets</a></li>
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
              <button class="btn" type="submit">Search</button>
              <a href="login.html">
              <button class="btn mx-2" type="button">Login</button>
            </a>
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


    <!--carousel-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ URL('images/img6.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ URL('images/img6.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ URL('images/img6.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>














    <!--cards-->
    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">

                <h3>Toys</h3>
                <div class="row p-2 bg-white border rounded">
                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="{{ URL('images/img5.jpg') }}"></div>
                    <div class="col-md-6 mt-1">
                        <h5>{{$toy1->toy_name}}</h5>
                        <div class="d-flex flex-row">
                            <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                        </div>
                        <div class="mt-1 mb-1 spec-1"><span class="dot"><span class="dot"></span><span><b>{{$toy1->age_group}}</b><br></span></div>
                        <div class="mt-1 mb-1 spec-1"><span>Availiablity :  {{$toy1->avail}}</span><br></div>
                        <p class="text-justify text-truncate para mb-0">{{$toy1->category_type_2}}<br><br></p>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                        <div class="d-flex flex-row align-items-center">

                        </div>
                        <h6 class="text-success">Free shipping</h6>
                        <div class="d-flex flex-column mt-4"><a href="details/{{$toy1->id}}"><button class="btn btn-outline-primary btn-sm mt-2" type="button">Details</button></a></div>
                    </div>
                </div>

                <hr class="divider">

                <h3>Toys for children with special needs</h3>
                <div class="row p-2 bg-white border rounded">
                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="{{ URL('images/img5.jpg') }}"></div>
                    <div class="col-md-6 mt-1">
                        <h5>{{$toy2->toy_name}}</h5>
                        <div class="d-flex flex-row">
                            <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                        </div>
                      <div class="mt-1 mb-1 spec-1"><span class="dot"><span class="dot"></span><span><b>{{$toy2->age_group}}</b><br></span></div>
                        <div class="mt-1 mb-1 spec-1"><span>Availiablity : {{$toy2->avail}}</span><br></div>
                        <p class="text-justify text-truncate para mb-0">{{$toy2->category_type_2}}<br><br></p>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                        <div class="d-flex flex-row align-items-center">

                        </div>
                        <h6 class="text-success">Free shipping</h6>
                        <div class="d-flex flex-column mt-4"><a href="details/{{$toy2->id}}"><button class="btn btn-outline-primary btn-sm mt-2" type="button">Details</button></a></div>
                    </div>
                </div>


                <hr class="divider">

                  <h3>Toys for pets</h3>
                <div class="row p-2 bg-white border rounded">
                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="{{ URL('images/img5.jpg') }}"></div>
                    <div class="col-md-6 mt-1">
                        <h5>{{$toy3->toy_name}}</h5>
                        <div class="d-flex flex-row">
                            <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>123</span>
                        </div>
                        <div class="mt-1 mb-1 spec-1"><span class="dot"><span class="dot"></span><span><b>{{$toy3->age_group}}</b><br></span></div>
                        <div class="mt-1 mb-1 spec-1"><span>Availiablity : {{$toy3->avail}}</span><br></div>
                        <p class="text-justify text-truncate para mb-0">{{$toy3->category_type_2}}<br><br></p>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                        <div class="d-flex flex-row align-items-center">

                        </div>
                        <h6 class="text-success">Free shipping</h6>
                        <div class="d-flex flex-column mt-4"><a href="details/{{$toy3->id}}"><button class="btn btn-outline-primary btn-sm mt-2" type="button">Details</button></a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="page-footer font-small special-color-dark pt-3 mt-6">

      <!-- Footer Elements -->
      <div class="container">

        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center">
          <li class="list-inline-item mx-2">
            <a href="https://vesit.ves.ac.in/" target="_blank">
              <i class="bi bi-instagram" ></i>
            </a>
          </li>
          <li class="list-inline-item mx-2">
          <a href="https://vesit.ves.ac.in/" target="_blank">
            <i class="bi bi-facebook"></i>
          </a>
          </li>
          <li class="list-inline-item mx-2">
          <a href="https://vesit.ves.ac.in/" target="_blank">
            <i class="bi bi-linkedin"></i>
            </a>
          </li>
          <li class="list-inline-item mx-2">
          <a href="https://vesit.ves.ac.in/" target="_blank">
            <i class="bi bi-twitter"></i>
            </a>
          </li>
        </ul>
        <!-- Social buttons -->

      </div>


      <!-- Copyright -->
      <div class="footer-copyright text-center">© 2020 Copyright:
        <a href="https://vesit.ves.ac.in/" target="_blank"> D7A Group 14</a>
      </div>

    </footer>



























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
