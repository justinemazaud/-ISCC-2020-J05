
   <nav>
                <a href="vitrine-accueil.php" class="fondNoir">Accueil</a>
                <a href="vitrine-contacts.php" class="fondNoir">Contacts</a>   
                <a href="vitrine-programme.php" class="fondNoir">Programme</a> 
                </nav>
                <style>

                    
.en-cour {
color:#17c1ff;
font-weight:bold; 
}

</style>


<?php

if ($current=='Accueil'){
echo '

<a class="en-cours:active" href="vitrine-acceuil.php">Accueil</a>
<a href=vitrine-programme.php">Programme</a>
<a href="vitrine-acceuil.php">Programme<Contact</a>';
}

if (current_page == 'Contact'){
echo '
<a class="en-cour" href="vitrine-contacts.php">Contact</a>
<a href="vitrine-programme.php">Programme</a>
<a href="vitrine-acceuil.php">Accueil</a>';
}

if(current_page == 'Programme') {
echo'
href="vitrine-programme.php">Programme</a>
<a href="vitrine-acceuil.php">Accueil</a>
<a class="en-cours" href="vitrine-contact.php">Contact</a>';
}   



