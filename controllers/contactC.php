<?php

include_once '../config.php';
include '../models/contact.php';
class contactsC {
    function affichercontact(){
        $sql="SELECT * FROM contacts";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   
    function supprimercontact($id_contact){
        $sql=" DELETE FROM contacts WHERE id_contact=:id_contact";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_contact' , $id_contact);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function ajoutercontact($contacts){

       $sql = "INSERT INTO contacts (nom_contact , prenom_contact , email_contact , message_contact)
                 VALUES (:nom_contact, :prenom_contact, :email_contact, :message_contact)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'nom_contact'=> $contacts->getnom_contact(),
            'prenom_contact'=> $contacts->getprenom_contact(),
            'email_contact'=> $contacts->getemail_contact(),
            'message_contact'=> $contacts->getmessage_contact(),
        ]);
        $_SESSION['error']="data add seccsesfuly";
} catch (Exception $e){
    $e->getMessage();
}

    }
function modifiercontact($contacts,$id_contact){
       try{
        $db = config::getConnexion();
$query = $db->prepare('UPDATE contacts SET  nom_contact = :nom_contact , prenom_contact = :prenom_contact, email_contact = :email_contact, message_contact = :message_contact   WHERE id_contact = :id_contact');
$query->execute([
        'nom_contact'=> $contacts->getnom_contact(),
            'prenom_contact'=> $contacts->getprenom_contact(),
            'email_contact'=> $contacts->getemail_contact(),
            'message_contact'=> $contacts->getmessage_contact(),
    'id_contact'=> $id_contact
]);
    } catch (Exception $e){
        $e->getMessage();
}}


function recuperercontact($id_contact){
    $sql="SELECT * from contacts where id_contact=$id_contact";
    $db = config::getConnexion();
try{
    $query = $db->prepare($sql);
$query->execute();
$cinemas=$query->fetch();
return $cinemas;
}catch (Exception $e){
    $e->getMessage();}
}
function affichertriContact(){
			
    $sql="SELECT * FROM contacts ORDER BY nom_contact";
    $db = config::getConnexion();
    try{
        $cinemas = $db->query($sql);
        return $cinemas;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}
function afficherRechercheContact($rech){
			
    $sql = "SELECT * FROM contacts WHERE nom_contact LIKE '%$rech%' OR prenom_contact LIKE '%$rech%' OR email_contact LIKE '%$rech%' ";

    $db = config::getConnexion();
    try{
        $cinemas = $db->query($sql);
        return $cinemas;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}

}
?>