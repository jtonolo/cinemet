<?php session_start();
include '../function/verif_co.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Allocinemet - Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style_pages_cont_real_act.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
</head>

<body>
<header id="haut">
        <nav class="w-100" id="link_nav">
            <a href="../index.php" id="logo">ALLOCINE<strong>MET</strong></a>
            <div id="Navbar">
                <a class="liens" href="../allo_films.php">FILMS </a>
                <a class="liens"href="../contact.php">CONTACT </a>
                <a class="liens"href="#">ACTEURS </a>
                <a class="liens"href="#">REALISATEURS </a>
                <a class="ml-5" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
            </div>
            <div class="m-nav-toggle">
                <span class="m-toggle-icon"></span>
            </div>
        </nav>
    </header>
    <?php
    include '../function/co.php';
        $current_id=$_GET['id'];
        $sql=$conn->prepare("SELECT * FROM utilisateurs WHERE id=$current_id");
        $sql->execute();
        $compte=$sql->fetch();
    ?>
    <div class="container text-center pt-5">
    <h2 class="mx-auto mt-5">Modifier le  compte :</h2>
        <div class="row ">
            <div class="col-md-12">
                <div class="well well-sm ">
                    <form class="form-horizontal offset-3" method="post">
                        <fieldset>
                            
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="login" type="email" value="<?=$compte['email']?>" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="mdp" type="text" value="<?=$compte['mot_de_passe']?>
                                " class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 mt-3 text-center">
                                        <button type="submit" name="submit"
                                            class="btn btn-primary btn-lg">Modifier</button>
                                    </div>
                                </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    $var1= $_POST['login'];
    $var2= $_POST['mdp'];
    if(isset($_POST['submit'])){
        $sql1 = $conn->query("UPDATE `utilisateurs` SET `email` = '$var1', `mot_de_passe` = '$var2' WHERE `utilisateurs`.`id`= $current_id");
        header('location:create_user.php');
    }?>
</body>
</html>