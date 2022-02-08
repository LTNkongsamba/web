<?php

  if(!empty($_POST['NOM']) && !empty($_POST['PRENOM']) && !empty($_POST['VILLE']) && !empty($_POST['EMAIL']) && !empty($_POST['NUMERO'])) {
  	$NOM = htmlspecialchars($_POST['NOM']);
  	$PRENOM = htmlspecialchars($_POST['PRENOM']);
  	$VILLE = htmlspecialchars($_POST['VILLE']);
  	$EMAIL = htmlspecialchars($_POST['EMAIL']);
  	$NUMERO = htmlspecialchars($_POST['NUMERO']);
  	$MESSAGE = htmlspecialchars($_POST['MESSAGE']);
  	if (filter_var($EMAIL, FILTER_VALIDATE_EMAIL)) {
  		
  	}else{
  		echo "Email non valide";
  	}
  	
  }else{
  	header("location:form.html");
  	die()
  }

?>