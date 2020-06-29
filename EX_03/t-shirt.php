<?php
$nom="T-shirt simple";
$couleur="blanc";
$prix=10.50;
$disponible=true;
$quantité=10;

echo "<h3>Le nom du produit est $nom</h3>";
echo "<h3>Il reste $quantité produits en stocks \n</h3>";
echo "<h3>Le produit $nom est de retour $couleur \n</h3>";


echo "<h4>Acheter 3 produits couterait ",3*$prix,"</h4>";
echo "<h4>Acheter la totalité des produits disponibles coûterait ",10*$prix," \n<h4>";
echo "<h4>Si 3 produits sont vendus \n<h4>";

if ($disponible == true){
    echo "Le produit $nom est disponible en ligne"; 
} else {
echo "Le produit $nom n'est malheureusement plus disponible";
}

if ($quantité>"5") { echo "<p>Il reste $quantité produits en magasin</p>";}
elseif ($quantité<"5") { echo "<p>Il ne reste pluq que $quantité produits en magasin</p>"; }
elseif ($quantité="1") { echo "<p>I ne reste plus qu'un produit en magasin</p>"; }
else { echo "<p> Il ne reste plus de produit en magasin</p>"; }

?>
