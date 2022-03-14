<!DOCTYPE html>
<?php
    session_start();
    if (isset($_GET['css'])){
        $styleform = $_GET['css'];
        setcookie('style',$styleform);
    }else 
        setcookie('style','style1')
?>
<html>
    <form id="login_form" action="index.php" method="POST">
        <table>
            <tr>
                <th>Login :</th>
                <td><input type="text" name="login"></td>
            </tr>
            <tr>
                <th>Mot de passe :</th>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="Se connecter..." /></td>
            </tr>
        </table>
    </form>
    <header> 
        <title>Gaëlle ERHART</title>
        <?php
            if (isset($_GET['css'])){
                echo "<link rel=stylesheet href=" .$_GET['css'] . ".css type='text/css' 
                media='screen' title='default' charset='utf-8'/>";
            }
            elseif(isset($_COOKIE['style'])){
                echo "<link rel=stylesheet href=" .$_COOKIE['style'] . ".css type='text/css' 
                media='screen' title='default' charset='utf-8'/>";
            }else
                echo "<link rel=stylesheet href='style1.css' type='text/css' media='screen' title='default' charset='utf-8'/>";
        ?>
    </header>
    <form id="style_form" action="login.php" method="GET">
        <select name="css">
            <option value="style1">style1</option>
            <option value="style2">style2</option>
        </select>
        <input type="submit" value="Appliquer" />
    </form>

    <body>
        <?php
            if(isset($GET['css'])){
                echo 'Votre votre style prédéfini est le ' .$_GET['css'];
            }
            elseif(isset($_COOKIE['style'])){
                echo 'Votre votre style prédéfini est le ' .$_COOKIE['style'];
            } else 
            echo 'Votre style prédéfini est celui par défaut';
        ?>
    </body>

    
</html>
