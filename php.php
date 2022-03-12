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
