<?php
echo $page;
?>

<header>
    <a class="<?php
    if($page == "Accueil") {
        echo "show";
    }
    ?>" href= "vitrine-accueil.php">Accueil</a>

    <a class="<?php
    if($page == "contacts") {
        echo "show";
    }
    ?>" href= "<vitrine-contacts.php">contacts</a>
    <a class="<?php
    if($page == "Programme") {
        echo "show";
    }
    ?>" href= "vitrine-programme.php">Programme</a>
