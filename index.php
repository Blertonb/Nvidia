<h1>Exercice 1</h1>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nbCaracteres = strlen($phrase);
echo "La phrase contient $nbCaracteres caractéres";

?>

<h1>Exercice 2</h1>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nbMots = str_word_count($phrase);
echo "La phrase contient $nbMots mots";

?>

<h1>Exercice 3</h1>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nouvellePhrase =str_replace("aujourd'hui", "demain", $phrase);
echo $nouvellePhrase;

?>

<h1>Exercice 4</h1>

<?php

$phrase = "Engage le jeu que je le gagne ";
$inverse = strtolower(strrev($phrase));
if (strtolower($phrase) === $inverse) {
    echo $phrase . ' est palindrome';
} else {
    echo $phrase .' est palindrome ';
}

?>

<h1>Exercice 5</h1>

<?php

$montant_francs = 6.56;
$montant_euros = 15.24 ;
$taux_Convertion = $montant_euros/ $montant_francs ;





$resultat = round($montant_francs*$taux_Convertion, 2);
echo "Affichage en francs :".$montant_francs. "<br>";
echo "Affichage en euros:" .$resultat;

//Montant en franc que l'on souhaite convertir en euro
$montant_francs = 1;
$taux_Convertion = 15.24 / 100;
var_dump($taux_Convertion);

$montant_euro = $montant_francs * $taux_Convertion;

echo "la valeur en euro de : " . $montant_francs ."fr = ". $montant_euro ."€";

?>

<h1>Exercice 6</h1>

<?php
 
// la facture d'un article

$prix_unitaire = 9.99;
$quantite = 5.00;
$taux_tva = 0.20;
$prix_quantite = $prix_unitaire*$quantite;
$valeur_total = $prix_quantite + $prix_quantite*$taux_tva;

echo "prix unitaire de l'article : $prix_unitaire €<br>";
echo "quantite : $quantite<br>";
echo "taux de tva : $taux_tva<br>";
echo "le montant de la facture à regler est de : $valeur_total €<br>"; 

?>
 
<h1>Exercice 7</h1>

<?php 



?>

<h1>Exercice 8</h1>

<?php

// Cela affichera la table de 8 

$nombre = 8;
$prod = 1;
for($i =1 ; $i<=10; $i++){
    $prod = $nombre*$i;
    echo $nombre . ' x ' . $i . ' = ' . $prod . '<br>';
 
 }

?>

<h1>Exercice 9</h1>
<?php

$age = 32;
$sexe = 'F';

echo "age :" .$age ."<br>";
echo " sexe :" .$sexe . "<br>";


if ($sexe == 'F' && $age >= 18 && $age <= 35) {
    echo " La personne est imposable";

}
else if ($sexe == 'M' && $age >= 20) {
    echo "La personne est imposable";
}
else { echo "ecrire non imposable"; }


?>

<h1>Exercice 10</h1>

<p> A partir d'un montant à payer et d'une somme versée pour régler un achat 
    ecrire l'algorithme qui affiche à un utilisateur un rendu de monnaie en nombre
    de 10€ et de 5€ , de pieces de 2€ et 1€
</p>

<?php

$montant_a_payer = 152;
$montant_verse = 200;
$billet10 = 0;
$billet5 = 0;
$piece2 = 0;
$piece1 = 0;


$reste_a_payer = $montant_verse-$montant_a_payer ;

echo "Montant a payer:" .$montant_a_payer . "<br>";
echo "Montant verse:" .$montant_verse . "<br>";
echo "reste a payer:" .$reste_a_payer . "<br>";

while ($reste_a_payer >= 10) {
    $reste_a_payer = $reste_a_payer -10 ;
    $billet10 = $billet10 + 1 ;
}

if ($reste_a_payer >= 5) {
    $reste_a_payer =$reste_a_payer -5 ;
    $billet5= $billet5 + 1 ;
}

while ($reste_a_payer >= 2) {
    $reste_a_payer = $reste_a_payer -2 ;
    $piece2 = $piece2 + 1 ;
}

if ($reste_a_payer >= 1) {
    $reste_a_payer = $reste_a_payer -1 ;
    $piece1 = $piece1 + 1 ;
}

echo "rendu de monnaie : $billet10 billet de 10 € -  $billet5 billet de 5 € - $piece2 piece de 2 € - $piece1 piece de 1 €" ;


?>

<h1>Exercice 11</h1>

<?php

echo "Il y a 4 marques de voitures dans le tableau <br> " ;

$voiture =[ "Peugeot", "Renault", "BMW", "Mercedes"] ;
foreach($voiture as $voiture) {
    echo "<li>".$voiture. "</li> <br>" ;
    
}
 
?>

<h1>Exercice 12</h1>

<?php

$tableau = array(" Michael"=> "FRA <br>" , " Virgile" => "ESP <br>" , "Marie-Claire" => "ENG <br>");
ksort($tableau) ;
foreach ($tableau as $noms => $langues){
    echo "$noms $langues" ; 

}

?>

<h1>Exercice 13</h1>

<?php

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9] ;

$nbnotes = count($notes);
$sommes = array_sum($notes);
$moyenne = round($sommes / $nbnotes, 2);

echo "Sa moyenne general est donc de : $moyenne <br>" ;

?>

<h1>Exercice 14</h1>

<?php

$date_naissance = "17-01-1985";
$aujourdhui = date("2018-05-21");

$diff = date_diff(date_create($date_naissance),date_create($aujourdhui));

printf('Age de la personne : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);

?>




















































