<?php
include '../controllers/contactC.php';
$id_contact = $_GET["id_contact"];
$contactsC = new contactsC();
if(
    isset($_POST['nom_contact'])&&isset($_POST['prenom_contact'])&&isset($_POST['email_contact'])&&isset($_POST['message_contact'])
  ) 
    
{
    $contacts = new contacts($_POST['nom_contact'],$_POST['prenom_contact'],$_POST['email_contact'],$_POST['message_contact']);
    $contactsC->modifiercontact($contacts,$id_contact);
}
else
echo 'erreur';
header('Location: table1.php');
?>