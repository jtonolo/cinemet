<?php

    $current_id=$_GET['id'];
    $sql=$conn->prepare("SELECT * FROM films WHERE id=$current_id");
    $sql->execute();
    $article=$sql->fetch();

?>
   