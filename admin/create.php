<?php session_start();
include '../function/verif_co.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/style_pages_cont_real_act.css">
    <!--  pour la police des titres  -->
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
</head>

<body>
<header id="haut">
        <nav class="w-100" id="link_nav">
            <a href="index.thml" id="logo">ALLOCINE<strong>MET</strong></a>
            <div id="Navbar">
                <a class="liens" href="../allo_films.html">FILMS </a>
                <a class="liens"href="../contact.html">CONTACT </a>
                
                <a class="ml-5" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
            </div>
            <div class="m-nav-toggle">
                <span class="m-toggle-icon"></span>
            </div>
        </nav>
    </header>
    <div class="row pl-5 ">
    <a class="btn mx-auto btn-primary mt-5 mb-5" href="index.php"><?=$_SESSION['admin']?></a>
    </div>
    
    <?php 
    include '../function/co.php';
        
        $test = $_POST['name'];
        $test1 = $_POST['realisateur'];
        $test2= $_POST['genre']; 
        $test3 = $_POST['description']; 
        $test4 = $_POST['duree'];
        $test5 = $_POST['photo'];
        $test6= $_POST['video'];
        $test7= $_POST['note'];
        $test8=$_POST['prod'];
        

        if(isset($_POST['submit'])){
            
           $conn->query ("INSERT INTO `films` (`titre`, `realisateur`, `genre`, `description`, `durée`, `image`, `ba`,`note`,`prod`)
            VALUES ('$test', '$test1', '$test2', '$test3', '$test4', '$test5','$test6','$test7', '$test8')");
            header('location:index.php');
        }
            
      
       
?>
    <div class="container text-center">
    <h2 class="mx-auto">Ajoutez un film :</h2>
        <div class="row ">
            <div class="col-md-12">
                <div class="well well-sm ">
                    <form class="form-horizontal offset-3" method="post" action="create.php">
                        <fieldset>
                            
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="name" type="text" placeholder="Nom du film" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="genre" type="text" placeholder="Genre du film" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="realisateur" type="text" placeholder="Réalisateur" class="form-control"
                                        required>
                                </div>
                            <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"></span>
                            <div class="col-md-8">
                                <input name="prod" type="text" placeholder="Production" class="form-control"
                                    required>
                            </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input id="phone" name="duree" type="time"  class="form-control" required>
                                </div>
                                <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input id="video" name="video" type="URL" placeholder="URL de la Bande d'Annonce" class="form-control">
                                </div>
                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"></span>
                                    <div class="col-md-8">
                                        <input name="photo" placeholder="URL de la photo" type="URL" class="form-control" >
                                 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"></span>
                                    <div class="col-md-8">
                                        <input name="note" placeholder="Note sur 5" type="number" min="1" max="5" class="form-control" >
                                 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"></span>
                                    <div class="col-md-8">
                                        <textarea class="form-control" name="description"
                                            placeholder="Entrez la description ici..." rows="7" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 text-center">
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
</body>
