<?php
$req = $conn->query("SELECT * FROM films");
     $articles = $req->fetchAll();
?>