<!DOCTYPE html>

<html>
    <!--<nav class="menu">
        <ul>
            <li><a href="Base.php">Accueil</a></li>
            <li><a href="Motivation.php">Motivations</a></li>
            <li><a href="Parcours.php">Parcours</a></li>
            <li><a href="Competences.php">Compétences</a></li>
            <li><a href="Contacts.php">Contacts</a></li>
        </ul>
    </nav>-->
</html>

<?php
function renderMenuToHTML($currentPageId) {
// un tableau qui definit la structure du site
    $mymenu = array(
// idPage titre
        'Base' => 'Accueil',
        'Motivation' => 'Motivations',
        'Parcours' => 'Parcours',
        'Competences' => 'Compétences',
        'Contacts' => 'Contacts'
        );
// ...
    echo '<nav class="menu"><ul>'
    foreach($mymenu as $pageId => $pageParameters) {
        if ($pageId == $currentPageId){
            echo "<li id='currentpage'><a href='index.php?page=$pageId'>$pageParameters</a></li>" ;
        }else{
            echo "<li><a href='index.php?page=$pageId'>$pageParameters</a></li>";
        }
    }
    //Pas besoin de faire un else si on casse la chaine de caractère et qu'on ajoute current page uniquement pour certains cas
    echo '</ul></nav>'

// ...

}
?>