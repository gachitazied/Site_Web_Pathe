<?php
class dates{
    private int $id_date;
    private  $date_date;
    private string $heure_date;
    private int $id_film;
   

    public function __construct($date_date, $heure_date,$id_film){
        $this->date_date=$date_date;
        $this->heure_date=$heure_date;  
        $this->id_film=$id_film;
    
    }
    public function getid_date(){
        return $this->id_date;
    }
    public function getdate_date(){
        return $this->date_date;
    }
    public function getheure_date(){
        return $this->heure_date;
    }

    public function getid_film(){
        return $this->id_film;

    }



    public function setdate_date( $date_date){
        $this->date_date=new DateTime($date_date);
    }
    public function setheure_date( $heure_date){
        $this->heure_date=$heure_date;
    }
    public function setid_film( $id_film){
        $this->id_film=$id_film;
    }
    
}

?>