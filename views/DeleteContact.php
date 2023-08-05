<?php
include '../controllers/contactC.php';
$contactsC=new contactsC();
$contactsC->supprimercontact($_GET["id_contact"]);
echo "erreur";
header('Location:table.php');
?>