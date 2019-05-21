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
    <div class="container text-center">
    <h2 class="mx-auto mt-5">Ajoutez un compte :</h2>
        <div class="row ">
            <div class="col-md-12">
                <div class="well well-sm ">
                    <form class="form-horizontal offset-3" method="post" >
                        <fieldset>
                            
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="login" type="email" placeholder="Identifiant" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="mdp" type="text" placeholder="mot de passe
                                " class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 mt-3 text-center">
                                        <button type="submit" name="submit"
                                            class="btn btn-primary btn-lg">Ajouter</button>
                                    </div>
                                </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
include '../function/co.php';
$var1= $_POST['login'];
$var2= $_POST['mdp'];
if(isset($_POST['submit'])){
$req=$conn->query("INSERT INTO utilisateurs (`email`, `mot_de_passe`) VALUES ('$var1','$var2')");

}
?>
<h2 class="w-100 text-center mt-5">Tous les comptes:</h2>
<table class=" col-8 offset-2 table table-bordered">
    
    <thead>
      <tr>
        <th>Identifiant</th>
        <th>Mot de passe</th>
        <th>Modifier/Supprimer</th>
      </tr>
    </thead>
    <tbody>
        <?php
    $req = $conn->query('SELECT * FROM utilisateurs');
    $comptes=$req-> fetchAll();
    foreach($comptes as $compte){
        echo'<tr>
        <td>'.$compte["email"].'</td>
        <td>'.$compte["mot_de_passe"].'</td>
        <td class="text-center"><a class="text-danger ml-3 " href="../function/delete_user.php?id='.$compte['id'].'">
        <i style="font-size:2em;" class="fas fa-trash-alt"></i></a>
        <a  class="text-warning ml-3" href="modif_user.php?id='.$compte['id'].'"><i style="font-size:2em;" class="fas fa-pencil-alt"></i></a>
        </div></td>
      </tr>';
    }
    ?>
    </tbody>
  </table>
</body>
</html> 
   