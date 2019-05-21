<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    
</head>

<body>

    <form  method="post" class="form-signin">
        <h1 class="text-center text-light">ALLOCINE<strong>MET</strong><h1>
        <h1 class="h3 mb-3 text-light text-center font-weight-normal">Inscrivez vous !</h1>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="text" name="email" id="inputUserName" class="form-control" placeholder="Votre email" required
            autofocus>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="text" name="id" id="inputUserName" class="form-control mt-3" placeholder="Votre identifiant" required
            autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputUserName" class="form-control mt-3" placeholder="Votre mot de passe"
            required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password1" id="inputPassword" class="form-control" placeholder="Retapez votre mot de passe"
        required>
        <div class="checkbox mb-3">
        </div>
        
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">S'inscrire</button>
        <p class="mt-5 mb-3 text-light text-center">&copy; Allocinemet 2019</p>
    </form>
    <?php
    include 'function/co.php';
    $var1= $_POST['email'];
    $var2= $_POST['id'];
    $var3= $_POST['password'];
    $var4= $_POST['password1'];
    if(isset($_POST['submit'])){
        $req=$conn->query("SELECT * FROM users WHERE login='$var2'");
        $sql=$conn->query("SELECT * FROM users WHERE email='$var1'");
        $verif0=$sql->fetch();
        $verif=$req->fetch();
        if($var3!=$var4){
            echo"<div class='alert alert-light fixed-top col-8 offset-2 mt-5 text-center' role='alert'>
            Le mot de passe doit etre identique !
          </div>";
        }elseif($verif0){
            echo"<div class='alert alert-light fixed-top col-8 offset-2 mt-5 text-center' role='alert'>
            Cet adresse email est déjà prise !
          </div>";
        }elseif($verif){
            echo"<div class='alert alert-light fixed-top col-8 offset-2 mt-5 text-center' role='alert'>
            Cet identifiant est déjà pris !
          </div>";
        }else{
            $conn->query("INSERT INTO users (`login`, `mdp`, `email`) VALUES ('$var2', '$var3', '$var1')");
            header('location:index.php');
        }

    }?>
</body>
</html>