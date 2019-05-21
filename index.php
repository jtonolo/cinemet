<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <title>AllocineMet</title>

  <link href="https://fonts.googleapis.com/css?family=Poiret+One|Roboto+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <script rel="text/javascript" src="app.js"></script>
  <link rel="stylesheet" href="css/animate.css">


</head>


<body>


  <header>
    <nav class="fixed-top" id="link_nav">
      <a href="#" class="mt-2" id="logo">ALLOCINE<strong>MET</strong></a>
      <div id="Navbar">
        <a href="allo_films.php">FILMS </a>
        <a href="contact.php">CONTACT </a>
        
        <?php 
        if(!isset($_SESSION['user'])){
          echo'<a href="login.php">SE CONNECTER </a>';
        }
        if(isset($_SESSION['user'])){
          echo'<a href="compte.php">MON COMPTE </a>';
        }
        ?>
      </div>
      <div class="m-nav-toggle">
        <span class="m-toggle-icon"></span>
    </nav>
  </header>

  <div onmouseover="nav2()" id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">

        <img src="https://mytf1vod.tf1.fr/assets/10e1db6fa016761ae5ca57e4d160f131.jpg" class="d-block w-100 img"
          height="960px" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.geoado.com/wp-content/uploads/2018/11/sf.jpeg" class="d-block w-100 img" height="960px"
          class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="http://www.lerepairedesmotards.com/img/actu/2019/une/captain-marvel.jpg" class="d-block w-100 img"
          height="960px" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="bg1 pb-5">
    <h1 class="text-center text-light  mb-3">à l' affiche</h1>
    <div class="ligne text-center">
      <img class="ligne_g fadeInLeft animated" src="img/ligne_g.png">
      <img class="ligne_d fadeInRight animated" src="img/ligne_d.png">
    </div>
    <div onmouseover="nav1()" class="carousel mt-5 " data-flickity='{ "wrapAround": true }'>
      <?php
        include 'function/co.php';
        include 'function/select_all.php';
        $req = $conn->query("SELECT * FROM films");
       $articles = $req->fetchAll();

        foreach($articles as $article){
        echo '<div class="carousel-cell"><a href="content.php?id='.$article["id"].'"><img class="img_caroussel"  src="'.$article["image"].'"></a></div>';
        }
        ?>
    </div>
  </div>
  <div style="width:100%;height:600px;background-image:url('https://experienceluxury.co/wp-content/uploads/2016/08/private-cinema.jpg');background-size:cover;background-attachment:fixed">
        <h1 class="w-100  text-center text-light" style="font-size:4em;position:absolute;margin-top:250px;;">Le cinema chez vous !</h1>
  </div>
  <div class="text-light" style="background-color: #505050">
    <div class="container-titre mx-auto text-center ">
      <h1 class="pt-5">ALLOCINEMET</h1>
      <hr class="col-4" style="background-color: white;">
    </div>
    <div class="container-fluid col-12 mx-auto pb-5">
    
      <div class="col-8 offset-2 text-center mt-3 container-fluid mx-auto ">
        <h2 class=" container-fluid mx-auto mt-2">A propos</h2>
        <p  class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga error reiciendis repellat, aut quos
          culpa
          distinctio tempora a laudantium voluptatem eligendi possimus nesciunt quas maiores, asperiores
          beatae
          esse? Nulla, totam.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, nesciunt sapiente. Magnam dicta
          eligendi
          repellendus repellat dolore saepe rem totam. Possimus quam illo aliquam repudiandae ipsam nam ad, et
          quis?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, nesciunt sapiente. Magnam dicta
          eligendi
          repellendus repellat dolore saepe rem totam. Possimus quam illo aliquam repudiandae ipsam nam ad, et
          quis?</p>
       
      </div>
    </div>
  </div>
  <footer id="footer" class="page-footer font-small text-white mdb-color pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left ">

      <!-- Footer links -->
      <div class="row text-center text-md-left  pb-3 mx-auto">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class=" text-uppercase mb-4  font-weight-bold text-white"><a href="index.html"> AllocineMET</a></h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold">Films à l'affiche</h5>
          <?php
                  include 'function/select_all.php';
                  $counter=0;
                  foreach($articles as $article){
                  if($counter<4){
                  echo'<p><a href="content.php?id='.$article["id"].'">'.$article["titre"].'</a></p>';
                  $counter+=1;
                }}
              ?>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold">Liens utiles</h5>
          <p>
            <a href="https://simplon.co/">Lorem Ipsum</a>
          </p>
          <p>
            <a href="https://simplon-charleville.fr/">Lorem Ipsum</a>
          </p>
          <p>
            <a href="#!">Lorem Ipsum</a>
          </p>
          <p>
            <a href="#">Lorem Ipsum</a>
          </p>
        </div>

        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold"><a href="contact.php">Contact</a></h5>
          <p>
            AllocineMET</p>
          <p>
            www.AllocineMET.net</p>
          <p>
            TEL +33 6 52 50 05 35</p>
          <p>
            TEL +33 6 87 26 69 70</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Footer links -->

      <hr class="hr-footer">

      <!-- Grid row -->
      <div class="row d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-7 col-lg-8">

          <!--Copyright-->
          <p class="text-center text-md-left">© 2019 Copyright: AllocineMET

          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-5 col-lg-4 ml-lg-0">

          <!-- Social buttons -->
          <div class="text-center text-md-right">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.facebook.com/">
                  <img src="img/facebook.png" title="facebook">
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://twitter.com/">
                  <img src="img/twitter.png" title="twitter">
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://github.com/">
                  <img src="img/github.png" title="github">
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://fr.linkedin.com/">
                  <img src="img/linkedin.png" title="linkedin">
                </a>
              </li>
            </ul>
          </div>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

  </footer>


  <script src="js/app.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/parallax.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>

</html>
