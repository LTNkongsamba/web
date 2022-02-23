      <?php
$nom=$_POST['NOM'];
$email=$_POST['EMAIL'];
$objet=$_POST['OBJET'];
$message=$_POST['MESSAGE'];


if (isset($_POST) && !empty($_POST['NOM']) &&!empty($_POST['EMAIL']) &&!empty($_POST['OBJET']) &&!empty($_POST['MESSAGE'])) {
    extract($_POST);
    $destinataire='moriantex2.0@gmail.com';
    $expediteur=$nom .' ' .$email .' ' .$objet;
    $mail=mail($destinataire, $expediteur, $message);

    echo $mail;




}else echo"formulaire non soumis ou des champ sont vide";
