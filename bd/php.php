

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
	<div class="title">NOUVEL ENREGISTREMENT</div>

<form action="php.php" method="POST" class="form">

  <div class="inputf">               
 <label>Noms de l'élève</label>
 	<input class="input" type="text" name="NOM" placeholder="Noms" required>
 	</div>

 	<div class="inputf">
<label>Prémons</label>
<input class="input" type="text" name="PNOM" placeholder="Prénoms" required>

</div> 

<div class="inputf">
<label>Sexe</label>
<div class="custor">
<select name="SEXE">
		<option value="Masculin">Masculin</option>
		<option value="Féminin">Féminin</option>
	</select></div>
</div>

<div class="inputf">
	<label>Date de naissance</label>
	
	
	<input class="bb" type="number" name="JNAISSANCE"  placeholder="Jour" required  maxlength="2" pattern="[0-9]+" size="1" min="1" max="30">

<div class="boba">
	<select class="email" name="MNAISSANCE">
		
		<option value="Janvier">Janvier</option>
		<option value="Février">Février</option>
		<option value="Mars">Mars</option>
		<option value="Avril">Avril</option>
		<option value="Mai">Mai</option>
		<option value="Juin">Juin</option>
		
		<option value="Juillet">Juillet</option>
		<option value="Aout">Aout</option>
		<option value="Septembre">Septembre</option>
		<option value="Octobre">Octobre</option>
		<option value="Novembre">Novembre</option>
		<option value="Décembre">Décembre</option>
	</select> </div>
	<input class="bb" type="number" name="ANAISSANCE" placeholder="Année" required minlength="4" maxlength="4" pattern="[0-9]+" size="1px" min="1995" max="2022">
</div>

<div class="inputf">
<label>Lieu de naissance</label>


<input class="input" type="text" name="LNAISSANCE" placeholder="Lieu" required>
</div>

<div class="inputf">
<label>Fils/Fille de:</label>
<input class="input" type="text" name="NOMP" placeholder="Noms du parent ou tuteur" required>
</div>

<div class="inputf">
<label>Numero du parent</label>
<input class="input" type="text" name="NUMEROP" placeholder="Numero de téléphone*" required minlength="9" maxlength="9" pattern="[0-9]+" min="650000000" max="699999999">
</div>

<div class="inputf">
<label>Et de:</label>
<input class="input" type="text" name="NOMM" placeholder="Noms du parent ou tuteur" >
</div>

<div class="inputf">
<label>Numero du parent</label>
<input class="input" type="text" name="NUMEROM" placeholder="Numero de téléphone*" minlength="9" maxlength="9" pattern="[0-9]+" min="650000000" max="699999999">
</div>

<div class="inputf">
<label>Situation de l'eleve</label>
<div class="custor">
	<select name="SITUATION" >
		<option value="Ancien">Ancien</option>
		<option value="Nouveau">Nouveau</option>
	</select></div>
</div>

	<div class="inputf">
<label>Est régulièrement inscrit en classe de:</label>
	<div class="custor">
	<select name="ACLASSE">
		<optgroup label="1ère Année">
		<option value="1ère A GEL1">1ère A GEL 1</option>
		<option value="1ère A GEL 2">1ère A GEL 2</option>
		<option value="1ère A GC/GB 1">1ère A GC/GB 1</option>
		<option value="1ère A GC/GB 2">1ère A GC/GB 2</option>
		<option value="1ère A COM">1ère A COM</option></optgroup>

<optgroup label="2ème Année">
		<option value="2ème A ELEQ ">2ème A ELEQ </option>
		<option value="2ème A AFSC">2ème A AFSC</option>
		<option value="2ème A CHARP">2ème A CHARP</option>
		<option value="2ème A MACO">2ème A MACO</option>
			<option value="2ème A MENU">2ème A MENU</option>
		<option value="2ème A GESTION">2ème A GESTION</option>
		<option value="2ème A SEBU">2ème A SEBU</option></optgroup>

		<optgroup label="3ème Année">
		<option value="3ème A ELEQ ">3ème A ELEQ </option>
		<option value="3ème A AFSC">3ème A AFSC</option>
		<option value="3ème A CHARP">3ème A CHARP</option>
		<option value="3ème A MACO">3ème A MACO</option>
		<option value="3ème A MENU">3ème A MENU</option>
		<option value="3ème A GESTION">3ème A ESCOM</option>
		<option value="3ème A SEBU">3ème A SEBU</option></optgroup>

		<optgroup label="4ème Année">
		<option value="4ème A ELEQ ">4ème A ELEQ </option>
		<option value="4ème A AFSC">4ème A AFSC</option>
		<option value="4ème A CHARP">4ème A CHARP</option>
		<option value="4ème A MACO">4ème A MACO</option>
			<option value="4ème A MENU">4ème A MENU</option>
		<option value="4ème A ESCOM ">4ème A ESCOM </option>
		<option value="4ème A SEBU">4ème A SEBU</option></optgroup>

		<optgroup label="2nde">
		<option value="2nde F3">2nde F3</option>
		<option value="2nde F4-BA">2nde F4-BA</option>
		<option value="2nde F5">2nde F5</option>
		<option value="2nde AMEB">2nde AMEB</option>
			<option value="2nde CMA/MVT">2nde CMA/MVT</option>
		<option value="2nde GT ">2nde GT</option>
		<option value="2nde IBTMG">2nde IBTMG</option>
			<option value="2nde ISRH">2nde ISRH</option>
		<option value="2nde STT A">2nde STT A</option>
		<option value="2nde STT B">2nde STT B</option></optgroup>

		<optgroup label="Premiere">
		<option value="P F3">P F3</option>
		<option value="P F4-BA">P F4-BA</option>
		<option value="P F5">P F5</option>
		<option value="P AMEB">P AMEB</option>
			<option value="P CMA/MVT">P CMA/MVT</option>
		<option value="P GT">P GT</option>
		<option value="P IBTMG">P IBTMG</option>
			<option value="P ISRH">P ISRH</option>
		<option value="P CG">P CG</option>
		<option value="P ACA">P ACA</option></optgroup>

	<optgroup label="Terminale">
		<option value="TLE F3">TLE F3</option>
		<option value="TLE F4-BA">TLE F4-BA</option>
		<option value="TLE F5">TLE F5</option>
		<option value="TLE AMEB">TLE AMEB</option>
		<option value="TLE CMA/MVT">TLE CMA/MVT</option>
			<option value="TLE GT">TLE GT</option>
		<option value="TLE IBTMG">TLE IBTMG</option>
		<option value="TLE ISRH">TLE ISRH</option>
			<option value="TLE CG A">TLE CG A</option>
		<option value="TLE CG B">TLE CG B</option>
		<option value="TLE ACA">TLE ACA</option></optgroup>
	
	</select></div>
</div>

	<div class="inputf">
<label>Et souhaite rejoindre la:</label>
	<div class="custor">

	<select name="NCLASSE"><optgroup label="1ère Année">
		<option value="1ère A GEL1">1ère A GEL 1</option>
		<option value="1ère A GEL 2">1ère A GEL 2</option>
		<option value="1ère A GC/GB 1">1ère A GC/GB 1</option>
		<option value="1ère A GC/GB 2">1ère A GC/GB 2</option>
		<option value="1ère A COM">1ère A COM</option></optgroup>

<optgroup label="2ème Année">
		<option value="2ème A ELEQ ">2ème A ELEQ </option>
		<option value="2ème A AFSC">2ème A AFSC</option>
		<option value="2ème A CHARP">2ème A CHARP</option>
		<option value="2ème A MACO">2ème A MACO</option>
			<option value="2ème A MENU">2ème A MENU</option>
		<option value="2ème A GESTION">2ème A GESTION</option>
		<option value="2ème A SEBU">2ème A SEBU</option></optgroup>

		<optgroup label="3ème Année">
		<option value="3ème A ELEQ ">3ème A ELEQ </option>
		<option value="3ème A AFSC">3ème A AFSC</option>
		<option value="3ème A CHARP">3ème A CHARP</option>
		<option value="3ème A MACO">3ème A MACO</option>
		<option value="3ème A MENU">3ème A MENU</option>
		<option value="3ème A GESTION">3ème A ESCOM</option>
		<option value="3ème A SEBU">3ème A SEBU</option></optgroup>

		<optgroup label="4ème Année">
		<option value="4ème A ELEQ ">4ème A ELEQ </option>
		<option value="4ème A AFSC">4ème A AFSC</option>
		<option value="4ème A CHARP">4ème A CHARP</option>
		<option value="4ème A MACO">4ème A MACO</option>
			<option value="4ème A MENU">4ème A MENU</option>
		<option value="4ème A ESCOM ">4ème A ESCOM </option>
		<option value="4ème A SEBU">4ème A SEBU</option></optgroup>

		<optgroup label="2nde">
		<option value="2nde F3">2nde F3</option>
		<option value="2nde F4-BA">2nde F4-BA</option>
		<option value="2nde F5">2nde F5</option>
		<option value="2nde AMEB">2nde AMEB</option>
			<option value="2nde CMA/MVT">2nde CMA/MVT</option>
		<option value="2nde GT ">2nde GT</option>
		<option value="2nde IBTMG">2nde IBTMG</option>
			<option value="2nde ISRH">2nde ISRH</option>
		<option value="2nde STT A">2nde STT A</option>
		<option value="2nde STT B">2nde STT B</option></optgroup>

		<optgroup label="Premiere">
		<option value="P F3">P F3</option>
		<option value="P F4-BA">P F4-BA</option>
		<option value="P F5">P F5</option>
		<option value="P AMEB">P AMEB</option>
			<option value="P CMA/MVT">P CMA/MVT</option>
		<option value="P GT">P GT</option>
		<option value="P IBTMG">P IBTMG</option>
			<option value="P ISRH">P ISRH</option>
		<option value="P CG">P CG</option>
		<option value="P ACA">P ACA</option></optgroup>

	<optgroup label="Terminale">
		<option value="TLE F3">TLE F3</option>
		<option value="TLE F4-BA">TLE F4-BA</option>
		<option value="TLE F5">TLE F5</option>
		<option value="TLE AMEB">TLE AMEB</option>
		<option value="TLE CMA/MVT">TLE CMA/MVT</option>
			<option value="TLE GT">TLE GT</option>
		<option value="TLE IBTMG">TLE IBTMG</option>
		<option value="TLE ISRH">TLE ISRH</option>
			<option value="TLE CG A">TLE CG A</option>
		<option value="TLE CG B">TLE CG B</option>
		<option value="TLE ACA">TLE ACA</option></optgroup>
	
	</select> </div></div>
	<div class="inputf">
<label>Commentaires</label>
	
	
	<textarea class="textarea" type="input" name="comme" placeholder="Poser une question" cols="18" rows="3" ></textarea>
		</div>

<!--<div class="inputf terms">
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
$prenom = $_POST['PNOM'];
$sexe = $_POST['SEXE'];
$jour = $_POST['JNAISSANCE'];
$mois = $_POST['MNAISSANCE'];
$ann = $_POST['ANAISSANCE'];
$lieu = $_POST['LNAISSANCE'];
$pere = $_POST['NOMP'];
$mere = $_POST['NOMM'];
$np = $_POST['NUMEROP'];
$nm = $_POST['NUMEROM'];
$st = $_POST['SITUATION'];
$ac = $_POST['ACLASSE'];
$nc = $_POST['NCLASSE'];
$cc = $_POST['comme'];

$req='INSERT INTO eleve(Nom_eleve, Prenom_eleve, Sexe_eleve, Jour_de_naissance, Mois_de_naissance, Annee_de_naissance, Lieu_de_naissance, Nom_pere, Numero1, Nom_mere, Numero2, Situation, Ancienne_classe, Nouvelle_classe, commentaires) 
  VALUES (:Nom_eleve, :Prenom_eleve, :Sexe_eleve, :Jour_de_naissance, :Mois_de_naissance, :Annee_de_naissance, :Lieu_de_naissance, :Nom_pere, :Numero1, :Nom_mere, :Numero2, :Situation, :Ancienne_classe, :Nouvelle_classe, :cc)';

$query = $pdo->prepare($req);

$query->bindValue(':Nom_eleve', $nom);
$query->bindValue(':Prenom_eleve', $prenom);
$query->bindValue(':Sexe_eleve', $sexe);
$query->bindValue(':Jour_de_naissance', $jour);
$query->bindValue(':Mois_de_naissance', $mois);
$query->bindValue(':Annee_de_naissance', $ann);
$query->bindValue(':Lieu_de_naissance', $lieu);
$query->bindValue(':Nom_pere', $pere);
$query->bindValue(':Nom_mere', $mere);
$query->bindValue(':Numero1', $np);
$query->bindValue(':Numero2', $nm);
$query->bindValue(':Situation', $st);
$query->bindValue(':Ancienne_classe', $ac);
$query->bindValue(':Nouvelle_classe', $nc);
$query->bindValue(':cc', $cc);

$result = $query->execute();

if (!$result){
		echo "echec de lenregistrement";
	}else{
		echo "
		<script type=\"text/javascript\"> alert('enregistrement ajouter avec success ✌😎✌')</script>";
	}



}














?>



</body>
</html>
