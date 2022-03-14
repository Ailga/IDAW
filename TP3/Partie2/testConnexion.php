<!DOCTYPE html>
<html>
    <head>
        <title>Connexion Base de données</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            
            //On établit la connexion
            $conn = new mysqli($servername, $username, $password);
            
            //On vérifie la connexion
            if ($conn->connect_errno) {
                printf("Connect failed: %s\n", $conn->connect_error);
                exit();
            }

            $query = 'SELECT * FROM table1';
            $result = $conn->query($query);
            /*if (!$result) {
                die('Invalid query: ' . mysql_error());
            }
            if($result){
                $infos=$result->fetch_array(MYSQLI_ASSOC);
                printf($infos);
            }*/
            print_r($result);
        ?>
    </body>
</html>