<?php
include_once '../config.php';
include '../models/reservation.php';
class reservationsC {
    function afficherreservation(){
        $sql="SELECT * FROM reservations";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   
    function supprimerreservation($id_reservation){
        $sql=" DELETE FROM reservations WHERE id_reservation=:id_reservation";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_reservation' , $id_reservation);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function ajouterreservation($reservations){

       $sql = "INSERT INTO reservations (film_reservation , salle_reservation , date_reservation , heure_reservation , place_reservation , email_reservation)
                 VALUES (:film_reservation, :salle_reservation, :date_reservation, :heure_reservation ,:place_reservation, :email_reservation)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'film_reservation'=> $reservations->getfilm_reservation(),
            'salle_reservation'=> $reservations->getsalle_reservation(),
            'date_reservation'=> $reservations->getdate_reservation(),
            'heure_reservation'=> $reservations->getheure_reservation(),
            'place_reservation'=> $reservations->getplace_reservation(),
            'email_reservation'=> $reservations->getemail_reservation()
        ]);
        $_SESSION['error']="data add seccsesfuly";
} catch (Exception $e){
    $e->getMessage();
}

    }
function modifierreservation($reservations,$id_reservation){
       try{
        $db = config::getConnexion();
$query = $db->prepare('UPDATE reservations SET  film_reservation = :film_reservation , salle_reservation = :salle_reservation, date_reservation = :date_reservation, heure_reservation = :heure_reservation , place_reservation = :place_reservation, email_reservation = :email_reservation   WHERE id_reservation = :id_reservation');
$query->execute([
    'film_reservation'=> $reservations->getfilm_reservation(),
    'salle_reservation'=> $reservations->getsalle_reservation(),
    'date_reservation'=> $reservations->getdate_reservation(),
    'heure_reservation'=> $reservations->getheure_reservation(),
    'place_reservation'=> $reservations->getplace_reservation(),
    'email_reservation'=> $reservations->getemail_reservation(),
    'id_reservation'=> $id_reservation
]);
    } catch (Exception $e){
        $e->getMessage();
}}


function recupererreservation($id_reservation){
    $sql="SELECT * from reservations where id_reservation=$id_reservation";
    $db = config::getConnexion();
try{
    $query = $db->prepare($sql);
$query->execute();
$cinemas=$query->fetch();
return $cinemas;
}catch (Exception $e){
    $e->getMessage();}
}

function affichertriReservation(){
			
    $sql="SELECT * FROM reservations ORDER BY film_reservation";
    $db = config::getConnexion();
    try{
        $cinemas = $db->query($sql);
        return $cinemas;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}
function afficherRechercheReservation($rech){
			
    $sql = "SELECT * FROM reservations WHERE film_reservation LIKE '%$rech%' OR email_reservation LIKE '%$rech%'  ";

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