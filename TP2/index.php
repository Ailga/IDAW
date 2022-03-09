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
    <?php
        renderMenuToHTML($currentPageId);
    ?>
    <section class="corps">
    <?php
        $pageToInclude = $currentPageId . ".php";
        if(is_readable($pageToInclude))
            require_once($pageToInclude);
        else
            require_once("error.php");
    ?>

    <?php echo '<ul class="choixlang">
                    <li><a href='Base.php'>Français</a></li>
                    <li><a href='Basis.php'>English</a></li>
                </ul>';
    ?>

    </section>
    <?php
        require_once("template_footer.php");
    ?>
</html>