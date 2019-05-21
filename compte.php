<?php session_start();
if(!isset($_SESSION['user'])){
header('location:index.php');
}?>
<!DOCTYPE php>
<php lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Allocinemet</title>
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link src="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/allo_films.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="footer.css">


  </head>

  <body style="background-color:#505050;color:white;font-family:Roboto Condensed;">
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
    <?php

$log= $_SESSION['user'];
include 'function/co.php';

$req=$conn->query("SELECT * FROM users WHERE login='$log'");
$compte=$req->fetch();

?>
    <h1 style="margin-top:8% " class="text-center"> Bienvenue <span><?= $compte['login'] ?></span> </h1>
    <div class="bg-dark mt-5 pb-5 text-light text-center container">
      <h2 class=""> Information du compte</h2>
      <p class="mt-3"><strong>Adresse Email : </strong> <?= $compte['email']?></p>
      <p class="mt-3"><strong>Identifiant : </strong> <?= $compte['login']?></p>

      <form method="post" class="mt-5 form-signin">

        <h1 class="h3 mb-3 text-light text-center font-weight-normal">Modifier les infos :</h1>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="email" id="inputUserName" class="form-control col-6 mx-auto"
          placeholder="Nouvelle adresse Email" required autofocus>
          <button class="btn btn-lg btn-secondary btn-block col-4 mx-auto" name="submit1" type="submit">Modifier</button>
          <?php
          $requ=$conn->query("SELECT * FROM users ");
          $comptes=$requ->fetchAll();
          if(isset($_POST['submit1'])){
            $var1= $_POST['email'];
            if($comptes){
            foreach($comptes as $compt){
                if($compt['email']==$var1){
                  echo "<div class='alert alert-light fixed-top col-8 offset-2 mt-5 text-center' role='alert'>
                 Cette adresse mail est deja utilisée !
                  </div>";
                }
              }
            }else{
              $conn->query("UPDATE users SET `email` = '$var1' WHERE `users`.`login`='$log'");
           header('location:compte.php');
            }
          }
          ?>
        </form>
        <form method="post" class="mt-5 form-signin">
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="text" name="id" id="inputUserName" class="form-control mt-3 col-6 mx-auto"
          placeholder="Nouvel identifiant" required autofocus>
          <button class="btn btn-lg btn-secondary btn-block col-4 mx-auto" name="submit2" type="submit">Modifier</button>
          <?php
          if(isset($_POST['submit2'])){
            $var2= $_POST['id'];
            if($comptes){
            foreach($comptes as $compt){
                if($compt['login']==$var2){
                  echo "<div class='alert alert-light fixed-top col-8 offset-2 mt-5 text-center' role='alert'>
                 Cet identifiant est deja utilisé !
                  </div>";
                }
              }
            }else{
              $conn->query("UPDATE users SET `login` = '$var2' WHERE `users`.`login`='$log'");
           header('location:compte.php');
            }
          }
          ?>
          </form>
          <form method="post" class="mt-5 form-signin">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputUserName" class="form-control mt-3 col-6 mx-auto"
          placeholder="Nouveau mot de passe" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password1" id="inputPassword" class="form-control col-6 mx-auto"
          placeholder="Retapez votre mot de passe" required>
        <div class="checkbox mb-3">
        </div>
        <button class="btn btn-lg btn-secondary btn-block col-4 mx-auto" name="submit" type="submit">Modifier</button>
       </form>

      
     
    </div>
    

  </body>

  </html>
