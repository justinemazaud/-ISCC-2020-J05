<!DOCTYPE html>
<html>
    <head>
    <title>Vitrine - Accueil</title>
    <meta charset="UTF-8">
    <link href="./vitrine.css" rel="stylesheet">
    </head>
 
    <Body>

        <header>
        <?php $current_page == "Contacts"?>
        <?php include "./navigation.php";?>
 
            <h1> Summer Code Camp</h1>
            <?php include "header.php";?>
        </header>
<main>
    <h2> Contact </h2>
    <form  action="Contact" method="POST">
        <div> 
            <input type="text"nplaceholder="Votre Nom">
        </div>
        <div>
            <input type="email" placeholder="Votre Email" id="mail" name="user_name">
        </div>
        <div>
            <textarea placeholders="Comment améliorer mon site ?" id="msg" name="user_name"></textarea>
        </div>
        <div> 
            <class="button">
                <a classe="button"> <button type="submit"> Envoyer</button> </a> 
        </div>
 
   
    </form>
</main>
        <footer>
            <?php include "./footer.php";?>
        </footer>
    </Body>
</html>