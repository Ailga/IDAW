        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            
            //On établit la connexion
            $conn = new mysqli($servername, $username, $password,'tp3_idaw');
            
            //On vérifie la connexion
            if ($conn->connect_errno) {
                printf("Connect failed: %s\n", $conn->connect_error);
                exit();
            }
            
            $query = 'SELECT * FROM table1';
            $result = $conn->query($query);
            
            if($result){
                $infos=$result->fetch_all(MYSQLI_ASSOC);
                /*print_r($infos);*/
            }


        ?>