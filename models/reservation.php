<?php
class reservations{
    private int $id_reservation;
    private string $film_reservation;
    private string $salle_reservation;
    private string $date_reservation;
    private string $heure_reservation;
    private int $place_reservation;
    private string $email_reservation;
    


    public function __construct($film_reservation,$salle_reservation, $date_reservation, $heure_reservation ,$place_reservation, $email_reservation){
        $this->film_reservation=$film_reservation;
        $this->salle_reservation=$salle_reservation;
        $this->date_reservation=$date_reservation;
        $this->heure_reservation=$heure_reservation;
        $this->place_reservation=$place_reservation;
        $this->email_reservation=$email_reservation;
    
    }
    public function getid_reservation(){
        return $this->id_reservation;
    }
    public function getfilm_reservation(){
        return $this->film_reservation;
    }
    public function getsalle_reservation(){
        return $this->salle_reservation;
    }
    public function getdate_reservation(){
        return $this->date_reservation;
    }
    public function getheure_reservation(){
        return $this->heure_reservation;
    }

    public function getplace_reservation(){
        return $this->place_reservation;
    }
   
    public function getemail_reservation(){
        return $this->email_reservation;
    }



    public function setfilm_reservation( $film_reservation){
        $this->film_reservation=$film_reservation;
    }
    public function setsalle_reservation( $salle_reservation){
        $this->salle_reservation=$salle_reservation;
    }
    public function setdate_reservation( $date_reservation){
        $this->date_reservation=$date_reservation;

}
public function setheure_reservation( $heure_reservation){
    $this->heure_reservation=$heure_reservation;

}
public function setplace_reservation( $place_reservation){
    $this->place_reservation=$place_reservation;

}
public function setemail_reservation( $email_reservation){
    $this->email_reservation=$email_reservation;

}

}
?>