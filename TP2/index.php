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

    <section class="corps">
    <?php
        if (is_readable("fr/". $currentPageId . ".php")){
            $pageToInclude = "fr/" . $currentPageId . ".php";
            renderMenuToHTML($currentPageId);
        }else {
            $pageToInclude = "en/" . $currentPageId . ".php";
            renderMenuToHTMLen($currentPageId);
        }
        if(is_readable($pageToInclude)){
            require_once($pageToInclude);
        }else{
            require_once("error.php");
        }
    ?>
    </section>

    <body>
        <ul class="choixlang">
            <li><a href='index.php?page=Base'>Français</a></li>
            <li><a href='index.php?page=Basis'>English</a></li>
        </ul>
    </body>

    <?php
        require_once("template_footer.php");
    ?>
</html>