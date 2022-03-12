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

$requete = "SELECT * FROM sms ORDER BY Nom ASC";
$result = $pdo->query($requete);
if (!$result) {
   echo "echec de l'afficharge";
}else{
    $naa = $result->rowCount();}
?>

<center><h3>tous nos message</h3></center>
<h4>il y'a <?=$naa?> enregistrement</h4>
<table>
   
<tr>

<th>Nom complet</th>
<th>Adresse email</th>
<th>Numero de telephone</th>
<th>Message</th>






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




</table>

<?php
$result->closeCursor();


?> 


</body>
</html>