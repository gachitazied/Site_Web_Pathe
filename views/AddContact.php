<?php
include '../controllers/contactC.php';
$contact = new contactsC();

if(

    isset($_POST['register-nom_contact'])&&isset($_POST['register-prenom_contact'])&&isset($_POST['register-email_contact'])&&isset($_POST['register-message_contact'])
  
){
    $contacts = new contacts($_POST['register-nom_contact'],$_POST['register-prenom_contact'],$_POST['register-email_contact'],$_POST['register-message_contact']);
    $contact -> ajoutercontact($contacts);
    header('Location: contact.php');

}
else
{
echo 'el forum mazelll na9esss hooooooooooooooy';
}
?>