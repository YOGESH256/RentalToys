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


     <!-- Bootstrap Dropdown Hover CSS -->
   <link href="css/animate.min.css" rel="stylesheet">
   <link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">
     <title>Khilona On Rent</title>

<style>

     .body1{



       }
       h3{
         margin-left: 30px;
         margin-top:  75px;
         font-size: 40px;
       }


       /* Modify the background color */

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
   </style>
</head>
   <body class="body1">
<!--nav bar -->
<nav class="navbar navbar-expand-lg navbar-dark">

  <div class="container">
      <a class="navbar-brand"  style= "color:white"href="{{ url('/') }}">
          {{ config('app.name', 'Khilona On Rent') }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav ">
            <li class="nav-item dropdown mx-2">
           <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Categories
           </a>
           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
             <li><a class="dropdown-item" href="{{URL('/details')}}">Toys</a></li>
             <li><a class="dropdown-item" href="catalog.html">Toys for children with special needs</a></li>
             <li><hr class="dropdown-divider"></li>
             <li><a class="dropdown-item" href="catalog.html">Toys for pets</a></li>
           </ul>
         </li>
         <li class="nav-item dropdown mx-2 me-5">
             <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Subscriptions
             </a>
             <ul class="dropdown-menu me-5" aria-labelledby="navbarDropdown">
               <li><a class="dropdown-item" href="#">Weekly Plan</a></li>
               <li><hr class="dropdown-divider"></li>
               <li><a class="dropdown-item" href="#">Monthly Plan</a></li>
               <li><hr class="dropdown-divider"></li>
               <li><a class="dropdown-item" href="#">Quarterly Plan</a></li>
             </ul>
           </li>

           @guest
               @if (Route::has('login'))
                   <li class="nav-item me-5">
                       <a class="nav-link " style= "color:white" href="{{ route('login') }}">{{ __('Login') }}</a>
                   </li>




               @endif

               @if (Route::has('register'))
                   <li class="nav-item">
                       <a class="nav-link"style= "color:white" href="{{ route('register') }}">{{ __('Register') }}</a>
                   </li>
               @endif

           @else
           <li class="nav-item ">
               <a class="nav-link" style= "color:white" href="toy">{{ __('Home') }}</a>
           </li>



                   <li class="nav-item dropdown" aria-labelledby="navbarDropdown">
                       <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                           {{ __('Logout') }}
                       </a>

                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                       </form>
                   </li>


           @endguest
         </ul>
         </div>
         </div>



          </ul>





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
    <img src="{{ URL('images/Baby.jpg') }}" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>First slide label</h5>
      <p>Some representative placeholder content for the first slide.</p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="{{ URL('images/Baby.jpg') }}" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>Second slide label</h5>
      <p>Some representative placeholder content for the second slide.</p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="{{ URL('images/Baby.jpg') }}" class="d-block w-100" alt="...">
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


<h3>Categories</h3>


<!-- card group -->
<div class="container-fluid">
<div class="row row-cols-md-3">
<div class="col">
  <div class="card">
    <img
      src="{{ URL('images/puzzle.jpg') }}"
      class="card-img-top"
      alt="..."
    />
    <div class="card-body">
      <h5 class="card-title">Weekly Plan</h5>
      <p class="card-text">
       This plan will Rent Toy on Weekly basis
      </p>

      <a href="catalog.html">
        <button type="button" class="btn btn-outline-danger">Read More</button>
      </a>
    </div>
  </div>
</div>
<div class="col">
  <div class="card">
    <img
      src="{{ URL('images/puzzle.jpg') }}"
      class="card-img-top"
      alt="..."
    />
    <div class="card-body">
      <h5 class="card-title">Monthly plan</h5>
      <p class="card-text">
        This plan will Rent Toy on Monthly basis
      </p>
      <a href="catalog.html"
      <button type="button" class="btn btn-outline-danger">Read More</button>
    </a>
    </div>
  </div>
</div>
<div class="col">
  <div class="card">
    <img
      src="{{ URL('images/puzzle.jpg') }}"
      class="card-img-top"
      alt="..."
    />
    <div class="card-body">
      <h5 class="card-title">Yearly Plan</h5>
      <p class="card-text">
        This plan will Rent Toy on Yearly basis
      </p>
      <a href="/plans">
      <button type="button" class="btn btn-outline-danger">Read More</button>
    </a>
    </div>
  </div>
</div>
</div>
</div>
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































<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script> -->


      <!-- Optional JavaScript; choose one of the two! -->
      <!-- Bootstrap Dropdown Hover JS -->
   <!-- <script src="js/bootstrap-dropdownhover.min.js"></script> -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
      -->
    </body>
  </html>
