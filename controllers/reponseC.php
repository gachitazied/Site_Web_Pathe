<?php
include_once '../config.php';
include '../models/reponses.php';
class reponsesC{
    function afficherreponse(){
        $sql="SELECT * FROM reponses";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   
    function supprimerreponse($id_reponse){
        $sql=" DELETE FROM reponses WHERE id_reponse=:id_reponse";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_reponse' , $id_reponse);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function ajouterreponse($reponses){

       $sql = "INSERT INTO reponses (email_reponse ,reponse_reponse ,id_contact)
                 VALUES (:email_reponse, :reponse_reponse , :id_contact)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'email_reponse'=> $reponses->getemail_reponse(),
            'reponse_reponse'=> $reponses->getreponse_reponse(),
            'id_contact'=> $reponses->getid_contact()
       
        ]);
        $_SESSION['error']="data add seccsesfuly";
} catch (Exception $e){
    $e->getMessage();
}

    }
function modifierreponse($id_reponse,$reponses){
       try{
        $db = config::getConnexion();
$query = $db->prepare("UPDATE reponses SET email_reponse= :email_reponse, reponse_reponse= :reponse_reponse , id_contact= :id_contact WHERE id_reponse= :id_reponse");
$query->execute([
    'email_reponse'=> $reponses->getemail_reponse(),
    'reponse_reponse'=> $reponses->getreponse_reponse(),
    'id_contact'=> $reponses->getid_contact(),
    'id_reponse'=> $id_reponse
]);
    } catch (Exception $e){
        $e->getMessage();
}}


function recupererreponse($id_reponse){
    $sql="SELECT * from reponses where id_reponse=$id_reponse";
    $db = config::getConnexion();
try{
    $query = $db->prepare($sql);
$query->execute();
$paniers=$query->fetch();
return $paniers;
}catch (Exception $e){
    $e->getMessage();}
}

function joincontact($id_contact){
    $sql=("SELECT * FROM reponses INNER JOIN contacts on reponses.id_contact = contacts.id_contact WHERE contacts.id_contact = $id_contact");
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur:' . $e->getMessage());
    }
}


function affichertriReponse(){
			
    $sql="SELECT * FROM reponses ORDER BY email_reponse";
    $db = config::getConnexion();
    try{
        $cinemas = $db->query($sql);
        return $cinemas;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}
function afficherRechercheReponse($rech){
			
    $sql = "SELECT * FROM reponses WHERE email_reponse LIKE '%$rech%' OR reponse_reponse LIKE '%$rech%'  ";

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