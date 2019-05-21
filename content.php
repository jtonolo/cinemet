<?php session_start();
    ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Allocinemet</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--Animate CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <!--  pour la police des titres  -->
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
  <!-- pour les autres textes -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <!--CSS FLICKITY-->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <!--mon CSS -->
  <link rel="stylesheet" href="css/style_pages_cont_real_act.css">
  <link rel="stylesheet" href="footer.css">

</head>


<body>

  <!--//////////////////////////////  NAVBAR  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

  <header id="haut">
    <nav class="w-100" id="link_nav">
      <a href="index.php" id="logo">ALLOCINE<strong>MET</strong></a>
      <div id="Navbar">
        <a class="liens" href="allo_films.php">FILMS </a>
        <a class="liens" href="contact.php">CONTACT </a>
        <?php 
        if(!isset($_SESSION['user'])){
          echo'<a href="login.php">SE CONNECTER </a>';
        }
        if(isset($_SESSION['user']) and !isset($_SESSION['admin'])){
          echo'<a href="compte.php">MON COMPTE</a>';
        }
        ?>
      </div>
      <div class="m-nav-toggle">
        <span class="m-toggle-icon"></span>
      </div>
    </nav>
  </header>
  <?php
    include 'function/co.php';
    include 'function/select.php';
    
?>

  <main id="content">



    <div class="hoofd">
      <h1 class="text-uppercase"><?=$article["titre"]?> </h1>
      <div class="fleches_2">
        <img class="fleche_g animated fadeInLeft" src="img/ligne_g.png">
        <img class="fleche_d animated fadeInRight" src="img/ligne_d.png">
      </div>
    </div>
<?php
if(isset($_SESSION['admin'])){
  echo'<div class="text-center pt-3" style="font-size:2em;">
  <a class="text-danger mr-5 " href="function/delete.php?id='.$article['id'].'">
  <i style="font-size:2em;" class="fas fa-trash-alt"></i></a>
  <a  class="text-warning ml-3" href="admin/modif.php?id='.$article['id'].'"><i style="font-size:2em;" class="fas fa-pencil-alt"></i></a></div>';
}  ?>

    <div class="row">
      <img id="img_film" class="mt-3 col-lg-4 col-8  col offset-lg-1 offset-2"  src="<?=$article['image']?>"
        class="mr-3" alt='<?=$article["titre"]?>'>
      <div class="col-lg-6 col-sm-12 col-md-12 ">

        <div style="font-size:1,3em; background-color:#505050;" class="text-center text-light text_film w-100"  >
          <h2>Description :</h2><?=$article['description']?><br><br>
          <h2>Durée : <?=$article['durée']?></h2>
        </div>
        <div class="list-group  text_film"  >
          <a style="background-color:#505050; border-bottom:1px solid white" href="#" class="list-group-item text-light list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Réalisateur</h5>
            </div>
            <p class="mb-1"><?= $article['realisateur']?></p>
            <small>Donec id elit non mi porta.</small>
          </a>
          <a style="background-color:#505050; border-bottom:1px solid white"href="#" class="list-group-item text-light list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Production</h5>
            </div>
            <p class="mb-1"><?= $article['prod'] ?></p>
            <small >Donec id elit non mi porta.</small>
          </a>
          <a style="background-color:#505050" href="acteur.html" class="list-group-item text-light list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Acteurs</h5>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
              blandit.</p>
            <small >Donec id elit non mi porta.</small>
          </a>

        </div>
        <div id="note1" class="w-100 mt-4 text-center" style="font-size:6em;">
          <p style="padding:10px; background-color:#505050; border-radius:15px;" >
          <?php
          if($article['note']==1){
           echo '<i class="fas fa-star text-warning mr-3"></i><i class="fas fa-star  mr-3"></i><i class="fas fa-star  mr-3"></i><i class="fas fa-star mr-3"></i><i class="fas fa-star mr-3"></i>';
            }elseif($article['note']==2){
              echo '<i class="fas fa-star text-warning mr-3"></i><i class="fas fa-star text-warning  mr-3"></i><i class="fas fa-star  mr-3"></i><i class="fas fa-star mr-3"></i><i class="fas fa-star mr-3"></i>';
            }elseif($article['note']==3){
              echo '<i class="fas fa-star text-warning mr-3"></i><i class="fas fa-star text-warning  mr-3"></i><i class="fas text-warning fa-star  mr-3"></i><i class="fas fa-star mr-3"></i><i class="fas fa-star mr-3"></i>';
            }elseif($article['note']==4){
              echo '<i class="fas fa-star text-warning mr-3"></i><i class="fas fa-star text-warning  mr-3"></i><i class="fas text-warning fa-star  mr-3"></i><i class="fas text-warning fa-star mr-3"></i><i class="fas fa-star mr-3"></i>';
            }
            elseif($article['note']==5){
              echo '<i class="fas fa-star text-warning mr-3"></i><i class="fas fa-star text-warning  mr-3"></i><i class="fas text-warning fa-star  mr-3"></i><i class="fas text-warning fa-star mr-3"></i><i class="fas text-warning fa-star mr-3"></i>';
            };
          ?>
        </p>
        </div>
        
      </div>
    </div>

    <div id="note2" class="w-100 mt-4 text-center" style="font-size:6em;">
          <p style="padding:10px; background-color:#505050; border-radius:15px;" >
          <?php
          if($article['note']==1){
           echo '<i class="fas fa-star text-warning mr-3"></i><i class="fas fa-star  mr-3"></i><i class="fas fa-star  mr-3"></i><i class="fas fa-star mr-3"></i><i class="fas fa-star mr-3"></i>';
            }elseif($article['note']==2){
              echo '<i class="fas fa-star text-warning mr-3"></i><i class="fas fa-star text-warning  mr-3"></i><i class="fas fa-star  mr-3"></i><i class="fas fa-star mr-3"></i><i class="fas fa-star mr-3"></i>';
            }elseif($article['note']==3){
              echo '<i class="fas fa-star text-warning mr-3"></i><i class="fas fa-star text-warning  mr-3"></i><i class="fas text-warning fa-star  mr-3"></i><i class="fas fa-star mr-3"></i><i class="fas fa-star mr-3"></i>';
            }elseif($article['note']==4){
              echo '<i class="fas fa-star text-warning mr-3"></i><i class="fas fa-star text-warning  mr-3"></i><i class="fas text-warning fa-star  mr-3"></i><i class="fas text-warning fa-star mr-3"></i><i class="fas fa-star mr-3"></i>';
            }
            elseif($article['note']==5){
              echo '<i class="fas fa-star text-warning mr-3"></i><i class="fas fa-star text-warning  mr-3"></i><i class="fas text-warning fa-star  mr-3"></i><i class="fas text-warning fa-star mr-3"></i><i class="fas text-warning fa-star mr-3"></i>';
            };
          ?>
        </p>
        </div>



    </div>

  </main>

  <div class="w-100 text-center pb-3" style="background-color:#434343">
    <h2 class="pt-2 pb-2 text-light" style="font-family: Poiret One;"> BANDE D'ANNONCE </h2>
    <iframe class="" src="<?=$article['ba']?>" width="80%" height="700px" frameborder="0"
      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="container-fluid" style="background-color:#505050">
    <h2 class="text-center text-light pb-3 pt-3" style="font-family:Poiret One;"> A VOIR AUSSI</h2>
    <div class="carousel" data-flickity='{ "wrapAround": true }'>

      <?php
        include 'function/co.php';
        include 'function/select_all.php';
        $count=0;
        foreach($articles as $article){
          
          if($_GET['id']!= $article['id']){
            if($count!=4){
              echo '<div class="carousel-cell "><a href="content.php?id='.$article["id"].'"><img class="img_caroussel "  src="'.$article["image"].'"></a></div>';
              $count += 1;
            }else{
              echo '<div class="carousel-cell is-selected"><a href="content.php?id='.$article["id"].'"><img class="img_caroussel "  src="'.$article["image"].'"></a></div>';
              
            }
          }
        }
        ?>
    </div>
    <div>
      <footer id="footer" class="page-footer font-small text-white mdb-color pt-4 sticky bottom">

        <!-- Footer Links -->
        <div class="container text-center text-md-left ">

          <!-- Footer links -->
          <div class="row text-center text-md-left mt-3 pb-3 mx-auto">

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
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 text-center">
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
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3 text-center">
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
                </ul>
              </div>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
        <!-- Footer Links -->

      </footer>

      <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>

      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
      <script>
        $('.m-nav-toggle').click(function (e) {
          e.preventDefault();
          $('#Navbar').toggleClass('is-open');
        })

        document.addEventListener('DOMContentLoaded', function () {
          window.onscroll = function (ev) {
            document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" :
              "cInvisible";
          };
        });

        $('#sidebarCollapse').click(function (e) {
          e.preventDefault();
          $('#sidebar').toggleClass('active');
        })

        function openModal() {
          document.getElementById("modal").style.top = "0px";
        }

        function closeModal() {
          document.getElementById("modal").style.top = "-780px";
        }

      </script>
</body>

</html>
