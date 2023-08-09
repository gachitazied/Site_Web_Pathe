<?php
include_once '../config.php';
include '../models/offre.php';
class offresC {
    function afficheroffre(){
        $sql="SELECT * FROM offres";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   

    function afficherDescOffre($id_offre) {
        $sql = "SELECT * FROM offres WHERE id_offre = :id_offre";
        $db = config::getConnexion();
        
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id_offre', $id_offre, PDO::PARAM_INT);
            $stmt->execute();
            $liste = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function supprimeroffre($id_offre){
        $sql=" DELETE FROM offres WHERE id_offre=:id_offre";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_offre' , $id_offre);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function ajouteroffre($offres){

       $sql = "INSERT INTO offres (img_offre , nom_offre , desc_offre , date_offre)
                 VALUES (:img_offre, :nom_offre, :desc_offre, :date_offre)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'img_offre'=> $offres->getimg_offre(),
            'nom_offre'=> $offres->getnom_offre(),
            'desc_offre'=> $offres->getdesc_offre(),
            'date_offre'=> $offres->getdate_offre(),
        ]);
        $_SESSION['error']="data add seccsesfuly";
} catch (Exception $e){
    $e->getMessage();
}

    }
function modifieroffre($offres,$id_offre){
       try{
        $db = config::getConnexion();
$query = $db->prepare('UPDATE offres SET  img_offre = :img_offre , nom_offre = :nom_offre, desc_offre = :desc_offre, date_offre = :date_offre   WHERE id_offre = :id_offre');
$query->execute([
        'img_offre'=> $offres->getimg_offre(),
            'nom_offre'=> $offres->getnom_offre(),
            'desc_offre'=> $offres->getdesc_offre(),
            'date_offre'=> $offres->getdate_offre(),
    'id_offre'=> $id_offre
]);
    } catch (Exception $e){
        $e->getMessage();
}}


function recupereroffre($id_offre){
    $sql="SELECT * from offres where id_offre=$id_offre";
    $db = config::getConnexion();
try{
    $query = $db->prepare($sql);
$query->execute();
$cinemas=$query->fetch();
return $cinemas;
}catch (Exception $e){
    $e->getMessage();}
}


}
?>