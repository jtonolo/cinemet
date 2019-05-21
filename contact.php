<!DOCTYPE php>
<php>

<head>
    <title>Contact Allocinemet</title>
    <meta charset="UTF-8">
    <link href="css/contact.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <!--//////////////////////////////  NAVBAR  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <header id="haut">
            <nav class="fixed-top" id="link_nav">
                <a href="index.php" id="logo">ALLOCINE<strong>MET</strong></a>
                <div id="Navbar">
                    <a class="liens" href="allo_films.php">FILMS </a>
                    <a class="liens" href="contact.php">CONTACT </a>
                    <?php 
                    if(!isset($_SESSION['user'])){
                    echo'<a href="login.php">SE CONNECTER </a>';
                    }
                    if(isset($_SESSION['user'])){
                    echo'<a href="compte.php">MES FAVORIS </a>';
                    }
                    ?>
                </div>
                <div class="m-nav-toggle">
                    <span class="m-toggle-icon"></span>
                </div>
            </nav>
        </header>


    <div class="titre-contact text-center mx-5 my-5">
        <h1>Contactez-Nous</h1>
    </div>
    <div class="logo-contact text-center">
        <i style="font-size:3em" class="fas fa-id-badge"></i>
    </div>
    <div class="form-contact mx-5 my-5">
        <form>
            <div class="form-row col-12">
                <div class="form-group col-6">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="jean.michel@hotmail.fr"
                        required>
                </div>
                <div class="form-group col-6" action="contact.php" method="post">
                    <label for="inputname">Nom & Prénom</label>
                    <input type="name" class="form-control" id="name" placeholder="Jean-Michel" required>
                </div>
            </div>
            <div class="form-group col-12" action="contact.php" method="post">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" id="adresse" placeholder="24 Rue de la bouteille" required>

            </div>
            <div class="form-row col-12" action="contact.php" method="post">
                <div class="form-group col-6">
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control" id="ville" placeholder="Charleville-Mézières">
                </div>
                <div class="form-group col-6" action="contact.php" method="post">
                    <label for="zip">Code Postale</label>
                    <input type="text" class="form-control" id="zip" placeholder="08000" required>
                </div>
            </div>
            <div class="form-group col-12" action="contact.php" method="post">
                <label for="sujet">Sujet de votre message :</label>
                <textarea class="form-control" id="sujet" rows="2" required></textarea>
            </div>
            <div class="form-group col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                        Confirmer
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-2 offset-5">Envoyer</button>
        </form>

    </div>


    <script>
          $('.m-nav-toggle').click(function(e){
            e.preventDefault();
            $('#Navbar').toggleClass('is-open');
        })</script>
</body>

</php>