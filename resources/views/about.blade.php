<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>@yield('title') -About Page</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('style/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('style/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/templatemo-stand-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/owl.css') }}">
<!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    @yield('header')
    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{ asset('style/index.html') }}"><h2>Stand Blog Artikel<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/home">Blog Entries
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="http://127.0.0.1:8000/about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Post Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    @yield('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>about us</h4>
                <h2>Halaman Profil!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    @yield('sidebar')
    <!-- Banner Ends Here -->


    <section class="about-us">
      <div class="container">
      	
        <div class="row">
          <div class="col-lg-12">
            <img src="{{ asset('style/assets/images/about-profil.jpg') }}" alt="">
            <p>My Name is <a rel="nofollow" href="https://templatemo.com/tag/business" target="_parent">Diska</a>, <a rel="nofollow" href="https://templatemo.com/tag/portfolio" target="_parent">Oktavia</a>,  I'm majoring in Informatics Engineering, D3 Informatics Management study program. from class MI 2E absent 07. I live in Mojokerto. I live with my parents. I am the third child of 3 siblings</p>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-6">
          <h4>Two-One Donec porttitor augue</h4>
          	<p>Quisque bibendum cursus viverra. Mauris at ex ipsum. Aenean condimentum urna nisl, eget interdum ante euismod vel. Aliquam at metus sit amet nunc dapibus posuere.</p>
          </div>
          <div class="col-lg-6">
          <h4>Two-Two Donec porttitor augue</h4>
          	<p>Maecenas et metus nisl. Morbi ac interdum metus. Aliquam erat volutpat. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.</p>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-4 col-md-6">
          <h4>1-03 Donec porttitor augue</h4>
          	<p>Quisque bibendum cursus viverra. Mauris at ex ipsum. Aenean condimentum urna nisl, eget interdum ante euismod vel. Aliquam at metus sit amet nunc dapibus posuere.</p>
          </div>
          <div class="col-lg-4 col-md-6">
          <h4>2-03 Donec porttitor augue</h4>
          	<p>Maecenas et metus nisl. Morbi ac interdum metus. Aliquam erat volutpat. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.</p>
          </div>
          <div class="col-lg-4">
          <h4>3-03 Donec porttitor augue</h4>
          	<p>Maecenas et metus nisl. Morbi ac interdum metus. Aliquam erat volutpat. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.</p>
          </div>
        </div>
        
        
        <div class="row">
          <div class="col-lg-3 col-md-6">
          <h4>01 Four Columns</h4>
          	<p>Mauris at ex ipsum. Aenean condimentum urna nisl, eget interdum ante euismod vel. Aliquam at metus sit amet nunc dapibus posuere.</p>
          </div>
          <div class="col-lg-3 col-md-6">
          <h4>02 Four Columns</h4>
          	<p>Aliquam erat volutpat. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.</p>
          </div>
          <div class="col-lg-3 col-md-6">
          <h4>03 Four Columns</h4>
          	<p>Morbi ac interdum metus. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.</p>
          </div>
          <div class="col-lg-3 col-md-6">
          <h4>04 Four Columns</h4>
          	<p>Aliquam erat volutpat. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.</p>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        
        
      </div>
    </section>

    @yield('footer')
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Behance</a></li>
              <li><a href="#">Linkedin</a></li>
              <li><a href="#">Dribbble</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>Copyright 2020 Stand Blog Co.
                    
                 | Design: <a rel="nofollow" href="https://templatemo.com" target="_parent">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('style/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('style/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Additional Scripts -->
    <script src="{{ asset('style/assets/js/custom.js') }}"></script>
    <script src="{{ asset('style/assets/js/owl.js') }}"></script>
    <script src="{{ asset('style/assets/js/slick.js') }}"></script>
    <script src="{{ asset('style/assets/js/isotope.js') }}"></script>
    <script src="{{ asset('style/assets/js/accordions.js') }}"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>