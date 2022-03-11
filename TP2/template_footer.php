<!DOCTYPE html>
<html>
<?php
        require_once("template_header.php");
        require_once("template_menu.php");
        $currentPageId = 'Base';
        if(isset($_GET['page'])) {
            $currentPageId = $_GET['page'];
        }
?>
    <footer>
<?php
    if (is_readable("fr/". $currentPageId . ".php")){        
        echo "<p>Merci de m'avoir lue</p>";}
    else{
        echo "<p> Thank you for reading me</p>";
    }
?>
    </footer>
</html>