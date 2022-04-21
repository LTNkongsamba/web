<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php
$pdo = new PDO('mysql:host=localhost; dbname=ltn', 'root',"");
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$requete = "SELECT * FROM eleve ORDER BY rang ASC";
$result = $pdo->query($requete);
if (!$result) {
	echo "echec de l'afficharge";
}else{
    $naa = $result->rowCount();}
?>

<center><h3>tous nos eleve</h3></center>
<center><h4>il y'a <?=$naa?> enregistrement</h4></center>
<center><table border="1">
	
<tr>
<th>rang</th>
<th>Nom eleve</th>
<th>Prenom eleve</th>
<th>Sexe eleve</th>
<th>Jour de naissance</th>
<th>Mois de naissance</th>
<th>Annee de naissance</th>
<th>Lieu de naissance</th>
<th>mon pere</th>
<th>Numero1</th>
<th>Nom mere</th>
<th>Numero2</th>
<th>Situation</th>
<th>Ancienne classe</th>
<th>Nouvelle classe</th>
<th>commentaires</th>






</tr>

<?php 
while ($ligne= $result->fetch(PDO::FETCH_NUM)) {
	echo "<tr>";
	foreach ($ligne as $valuer) {
		echo "<td>$valuer</td>";
	}
	echo "</tr>";
}



?>




</table></center>

<?php
$result->closeCursor();


?>	


</body>
</html>