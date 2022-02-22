      <?php
if (isset($_POST) && !empty($_POST['NOM']) &&!empty($_POST['PRENOM']) &&!empty($_POST['VILLE']) &&!empty($_POST['EMAIL']) &&!empty($_POST['NUMERO']) &&!empty($_POST['MESSAGE'])) {
    extract($_POST);
    $destinataire='moriantex2.0@gmail.com';
    $expediteur=$NOM .' ' .$PREMON .' ' .$VILLE .' ' .$EMAIL .' ' .$NUMERO;
    $mail=mail($destinataire,$expediteur,$MESSAGE ' :DU site LTNkongsamba');

if ($mail)echo'Email envoy avec succés!!';else echo'Echec de l''envoi du mail!!'; 
}else echo"formulaire non soumis ou des champ sont vide";
?>
