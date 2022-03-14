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
    
    <?php
    echo "<body>";
        $mypage = array(
            'Basis' => 'Base',
            'Motives' => 'Motivation',
            'Course' => 'Parcours',
            'Abilities' => 'Competences',
            'Contact' => 'Contacts'
            );
        if (is_readable("fr/". $currentPageId . ".php")){
            echo "<a href='index.php?page=" . array_search($currentPageId, $mypage) . "'>Translate in English</a>";
        }else{  
            echo "<a href='index.php?page=". $mypage[$currentPageId] . "'>Traduire en Français</a>";
        }
        echo "</body>";
    ?>

    <?php
        require_once("template_footer.php");
    ?>
</html>