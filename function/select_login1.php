<?php
$req = $conn->prepare('SELECT * FROM users WHERE login = :email AND mdp = :passsword');
?>