<?php session_start();
include '../function/verif_co.php';?>
<!DOCTYPE php>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Allocinemet - Admin </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="../css/style_pages_cont_real_act.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body style="font-family:'Roboto Condensed">
<header id="haut">
        <nav class="w-100" id="link_nav">
            <a href="../index.php" id="logo">ALLOCINE<strong>MET</strong></a>
            <div id="Navbar">
                <a class="liens" href="../allo_films.php">FILMS </a>
                <a class="liens"href="../contact.php">CONTACT </a>
                
                <a class="ml-5" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
            </div>
            <div class="m-nav-toggle">
                <span class="m-toggle-icon"></span>
            </div>
        </nav>
    </header>

<?php 
  
    echo"<h1 class='text-center mt-3'>Bienvenue <span class='text-info'>".$_SESSION['admin']."</span></h1>";
    include '../function/co.php';
       
?>
<div class="container-fluid text-center">
    <a href="create.php" class="mt-3 mb-3 btn btn-success "><i class="fas fa-plus-square"></i>  Ajouter un film</a>
    <a href="create_user.php" class="btn btn-primary"><i class="fas fa-user"></i> Gestion des comptes</a>
</div>
    <div id="contain" class="container-fluid mt-3 pb-5">
    <?php
    include '../function/select_all.php';
     
        foreach($articles as $article){
            echo '<div class="mt-3 '.$article["genre"].' card mr-3" style="width: 18rem;">
            <img src="'.$article["image"].'" class="card-img-top " style="max-height:350px; width="100px" alt="'.$article["titre"].'">
            <div class="card-body">
              <h5 class="card-title">'.$article["titre"].'</h5>
              <p class="card-subtitle">Par <strong>'.$article["realisateur"].'</strong></p>
              <div class="card-text mt-3 ml-5">
              <a target="_blank" class"text-info ml-4" href="../content.php?id='.$article['id'].'">
              <i style="font-size:2em;" class="fas fa-eye"></i></a>
              <a class="text-danger ml-3 " href="../function/delete.php?id='.$article['id'].'">
              <i style="font-size:2em;" class="fas fa-trash-alt"></i></a>
              <a  class="text-warning ml-3" href="modif.php?id='.$article['id'].'"><i style="font-size:2em;" class="fas fa-pencil-alt"></i></a>
              </div>
            </div>
          </div>';
        }
    ?>
    </div>

    
</body>
</html>