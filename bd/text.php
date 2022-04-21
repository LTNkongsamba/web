

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FORMULAIRE</title>


<style type="text/css">

	input:invalid {
  background-color: #ffdddd;
}
/*
form:invalid {

  border: 5px solid #ffdddd;
  background-color: #ffdddd;
}*/

input:valid {
  background-color: #ddffdd;
}
/*
form:valid {
  border: 5px solid #ddffdd;
  background-color: #ddffdd;
}

input:required {
  border-color: #800000;
  border-width: 3px;
}

input:required:valid {
  border-color: #008000;
}
*/
</style>


</head>
<body>

<div class="regform">
	<div class="title">NOUVEAUX MESSAGE</div>

<form action="text.php" method="POST" class="form">

  <div class="inputf">               
 <label>Nom complet</label>
 	<input class="input" type="text" name="NOM" placeholder="Noms et Prenoms" required>
 	</div>

 	<div class="inputf">
<label>Adresse email</label>
<input class="input" type="email" name="PNOM" placeholder="Adresse@mail.com" required>

</div> 
<div class="inputf">
<label>Numero de telephone</label>
<input class="input" type="number" name="NUMEROP" placeholder="Numero de téléphone*" required minlength="9" maxlength="9" pattern="[0-9]+" min="650000000" max="699999999">
</div>

	<div class="inputf">
<label>Message</label>
	
	
	<textarea class="textarea" type="input" name="comme" placeholder="Poser une question" cols="18" rows="3" required></textarea>
		</div>
<!--
<div class="inputf terms">
	<label class="check">
		<input type="checkbox">
		<span class="checkmark"></span>
	</label>
	<p>Accepter et s'inscrir???</p>
</div>
-->
<div class="inputf">
	<input type="submit" name="ok" value="VALIDER" class="btn">
	 </div>
</form>
</div>



<?php
$pdo = new PDO('mysql:host=localhost; dbname=ltn', 'root',"");
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['ok'])) {
$nom = $_POST['NOM'];
$email = $_POST['PNOM'];
$numero = $_POST['NUMEROP'];
$jour = $_POST['comme'];
$req='INSERT INTO sms(Nom, Adresse_email, Numero_de_telephone, Message) 
  VALUES (:Nom_eleve, :Prenom_eleve, :Sexe_eleve, :Jour_de_naissance)';
$query = $pdo->prepare($req);
$query->bindValue(':Nom_eleve', $nom);
$query->bindValue(':Prenom_eleve', $email);
$query->bindValue(':Sexe_eleve', $numero);
$query->bindValue(':Jour_de_naissance', $jour);
$result = $query->execute();
if (!$result){
		echo "echec de lenregistrement";
	}else{
		echo "
		<script type=\"text/javascript\"> alert('Message envoyer avec success ✌😎✌')</script>";
	}}?>



</body>
</html>
