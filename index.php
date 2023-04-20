
<h1>Exercice Livre</h1>

<p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et 
leurs auteurs respectifs.</p>

<h2>Résultat</h2>


<?PHP
include ('Auteur.php');
include ('Livre.php');


$Ca = new Livre("Ca", 1986, 1138, 20);
$Simetierre = new Livre("Simetierre", 1983, 374, 15);
$LeFleau = new Livre("Le Fléau", 1978, 823, 14);
$Shining = new Livre("Shining", 1977, 447, 16);

$bibliographie = array($Ca,$Simetierre,$LeFleau,$Shining);

$auteur1 = new Auteur("Stephen","King",$bibliographie);
echo $auteur1 ;

$auteur1->afficherBibliographie()
?>