<!DOCTYPE html>
<html>
    <head>
        <title>Inscription</title>
        <link rel=stylesheet href="Design.css" type="text/css"
        media="screen" title="default" charset="utf-8"/>
    </head>
    <body>
        <?php
        $conn = new mysqli($servername, $username, $password,'tp3_idaw');
            
        //On vérifie la connexion
        if ($conn->connect_errno) {
            printf("Connect failed: %s\n", $conn->connect_error);
            exit();

        $stmt = $conn->prepare("INSERT INTO table1 (login,password,pseudo) VALUES (?, ?)");
        
        ?>
        <tr>
            <th>Login :</th>
            <td><input type="text" name="login"></td>
        </tr>
        <tr>
            <th>Mot de passe :</th>
            <td><input type="password" name="password"></td>
        </tr>


