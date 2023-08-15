<?php
include_once '../config.php';
include '../models/cinema.php';
class cinemasC {
    function affichercinema(){
        $sql="SELECT * FROM cinemas";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   
    function supprimercinema($id_cinema){
        $sql=" DELETE FROM cinemas WHERE id_cinema=:id_cinema";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_cinema' , $id_cinema);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function ajoutercinema($cinemas){

       $sql = "INSERT INTO cinemas (img_cinema,nom_cinema,lieu_cinema)
                 VALUES (:img_cinema,:nom_cinema, :lieu_cinema)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'img_cinema'=> $cinemas->getimg_cinema(),
            'nom_cinema'=> $cinemas->getnom_cinema(),
            'lieu_cinema'=> $cinemas->getlieu_cinema(),
            
        ]);
        $_SESSION['error']="data add seccsesfuly";
} catch (Exception $e){
    $e->getMessage();
}

    }
function modifiercinema($cinemas,$id_cinema){
       try{
        $db = config::getConnexion();
$query = $db->prepare('UPDATE cinemas SET  img_cinema = :img_cinema , nom_cinema = :nom_cinema, lieu_cinema = :lieu_cinema   WHERE id_cinema = :id_cinema');
$query->execute([
    'img_cinema'=> $cinemas->getimg_cinema(),
    'nom_cinema'=> $cinemas->getnom_cinema(),
    'lieu_cinema'=> $cinemas->getlieu_cinema(),
    'id_cinema'=> $id_cinema
]);
    } catch (Exception $e){
        $e->getMessage();
}}


function recuperercinema($id_cinema){
    $sql="SELECT * from cinemas where id_cinema=$id_cinema";
    $db = config::getConnexion();
try{
    $query = $db->prepare($sql);
$query->execute();
$cinemas=$query->fetch();
return $cinemas;
}catch (Exception $e){
    $e->getMessage();}
}
function affichertriCinema(){
			
    $sql="SELECT * FROM cinemas ORDER BY lieu_cinema";
    $db = config::getConnexion();
    try{
        $cinemas = $db->query($sql);
        return $cinemas;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}
function afficherRechercheCinema($rech){
			
    $sql = "SELECT * FROM cinemas WHERE nom_cinema LIKE '%$rech%' OR lieu_cinema LIKE '%$rech%'";

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