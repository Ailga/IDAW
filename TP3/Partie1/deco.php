<!DOCTYPE html>
<?php
    session_start();
    session_unset();
    session_destroy();

header("Location:login.php");
?>

<!--<h1> Vous avez été déconnecté avec succès </h1>

<body>
    <a href='login.php'>Retourner à la page d'acceuil</a>
</body>-->