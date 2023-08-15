<?php
include_once '../config.php';
include '../models/inscri.php';
class inscrisC{
    function afficherinscri(){
        $sql="SELECT * FROM inscris";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   
    function supprimerinscri($id_inscri){
        $sql=" DELETE FROM inscris WHERE id_inscri=:id_inscri";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_inscri' , $id_inscri);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function ajouterinscri($inscris){

       $sql = "INSERT INTO inscris (nom_inscri ,prenom_inscri ,email_inscri ,telephone_inscri ,nombre_inscri ,message_inscri ,nom_offre ,id_offre)
                 VALUES (:nom_inscri,:prenom_inscri,:email_inscri,:telephone_inscri,:nombre_inscri,:message_inscri, :nom_offre , :id_offre)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'nom_inscri'=> $inscris->getnom_inscri(),
            'prenom_inscri'=> $inscris->getprenom_inscri(),
            'email_inscri'=> $inscris->getemail_inscri(),
            'telephone_inscri'=> $inscris->gettelephone_inscri(),
            'nombre_inscri'=> $inscris->getnombre_inscri(),
            'message_inscri'=> $inscris->getmessage_inscri(),
            'nom_offre'=> $inscris->getnom_offre(),
            'id_offre'=> $inscris->getid_offre()
       
        ]);
        $_SESSION['error']="data add seccsesfuly";
} catch (Exception $e){
    $e->getMessage();
}

    }
function modifierinscri($id_inscri,$inscris){
       try{
        $db = config::getConnexion();
$query = $db->prepare("UPDATE inscris SET nom_inscri= :nom_inscri,   prenom_inscri= :prenom_inscri  ,  email_inscri= :email_inscri  ,   telephone_inscri= :telephone_inscri,  nombre_inscri= :nombre_inscri ,   message_inscri= :message_inscri, nom_offre= :nom_offre , id_offre= :id_offre WHERE id_inscri= :id_inscri");
$query->execute([
    'nom_inscri'=> $inscris->getnom_inscri(),
    'prenom_inscri'=> $inscris->getprenom_inscri(),
    'email_inscri'=> $inscris->getemail_inscri(),
    'telephone_inscri'=> $inscris->gettelephone_inscri(),
    'nombre_inscri'=> $inscris->getnombre_inscri(),
    'message_inscri'=> $inscris->getmessage_inscri(),
    'nom_offre'=> $inscris->getnom_offre(),
    'id_offre'=> $inscris->getid_offre(),
    'id_inscri'=> $id_inscri
]);
    } catch (Exception $e){
        $e->getMessage();
}}


function recupererinscri($id_inscri){
    $sql="SELECT * from inscris where id_inscri=$id_inscri";
    $db = config::getConnexion();
try{
    $query = $db->prepare($sql);
$query->execute();
$paniers=$query->fetch();
return $paniers;
}catch (Exception $e){
    $e->getMessage();}
}


}

?>