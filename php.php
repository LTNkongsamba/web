      <?php
$nom=$_POST['NOM'];
$email=$_POST['EMAIL'];
$objet=$_POST['OBJET'];
$message=$_POST['MESSAGE'];


if (isset($_POST) && !empty($_POST['NOM']) &&!empty($_POST['EMAIL']) &&!empty($_POST['OBJET']) &&!empty($_POST['MESSAGE'])) {

echo " votre nom " .$nom ." votre email " .$email ." l'objet " .$objet ." votre message " .$message;


   
    $destinataire='moriantex2.0@gmail.com';
    $expediteur=" votre nom " .$nom ." votre email " .$email ." l'objet " .$objet ." votre message " .$message;
    $mail=mail($destinataire, $expediteur, $message);

    echo $mail;


}else echo"echec de l'envoi";
?>