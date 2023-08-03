<?php
class films{
    private int $id_film;
    private string $img_film;
    private string $nom_film;
    private string $desc_film;
    private string $genre_film;
    private string $dure_film;
    private string $salle_film;
    private int $id_cinema;
   

    public function __construct($img_film, $nom_film, $desc_film,$genre_film,$dure_film,$salle_film,$id_cinema){
        $this->img_film=$img_film;
        $this->nom_film=$nom_film;  
        $this->desc_film=$desc_film;
        $this->genre_film=$genre_film;
        $this->dure_film=$dure_film;
        $this->salle_film=$salle_film;
        $this->id_cinema=$id_cinema;
    
    }
    public function getid_film(){
        return $this->id_film;
    }
    public function getimg_film(){
        return $this->img_film;
    }
    public function getnom_film(){
        return $this->nom_film;
    }
    public function getdesc_film(){
        return $this->desc_film;
    }
    public function getgenre_film(){
        return $this->genre_film;
    }
    public function getdure_film(){
        return $this->dure_film;
    }
    public function getsalle_film(){
        return $this->salle_film;

    }
    public function getid_cinema(){
        return $this->id_cinema;

    }



    public function setimg_film( $img_film){
        $this->img_film=$img_film;
    }
    public function setnom_film( $nom_film){
        $this->nom_film=$nom_film;
    }
    public function setdesc_film( $desc_film){
        $this->desc_film=$desc_film;
    }
    public function setgenre_film( $genre_film){
        $this->genre_film=$genre_film;
    }
    public function setdure_film( $dure_film){
        $this->dure_film=$dure_film;
    }
    public function setsalle_film( $salle_film){
        $this->salle_film=$salle_film;
    }
    public function setid_cinema( $id_cinema){
        $this->id_cinema=$id_cinema;
    }
    
}

?>