<!DOCTYPE html>

<?php
// on simule une base de données
    require_once('testConnexion.php');
    $tab=array();
    foreach($infos as $id=>$donnees){
        foreach($donnees as $clé=>$valeur){
            if($clé=='login'){
                $log=$valeur;
            }
            elseif($clé=='password'){
                $tab["$log"]="$valeur";
            }
        }
    }        
    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;
    if(isset($_POST['login']) && isset($_POST['password'])) {
        $tryLogin=$_POST['login'];
        $tryPwd=$_POST['password'];
        // si login existe et password correspond
        if( array_key_exists($tryLogin,$tab) && $tab[$tryLogin]==$tryPwd ) {
            $successfullyLogged = true;
            $login = $tryLogin;
        } else
            $errorText = "Erreur de login/password";
    } else
        $errorText = "Merci d'utiliser le formulaire de login";
        if(!$successfullyLogged) {
            echo $errorText;
        } else {
            echo "<h1>Bienvenu ".$login."</h1>";
        }
?>
