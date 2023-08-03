<?php
class cinemas{
    private int $id_cinema;
    private string $img_cinema;
    private string $nom_cinema;
    private string $lieu_cinema;


    public function __construct($img_cinema,$nom_cinema, $lieu_cinema){
        $this->img_cinema=$img_cinema;
        $this->nom_cinema=$nom_cinema;
        $this->lieu_cinema=$lieu_cinema;
  
    
    }
    public function getid_cinema(){
        return $this->id_cinema;
    }
    public function getimg_cinema(){
        return $this->img_cinema;
    }
    public function getnom_cinema(){
        return $this->nom_cinema;
    }
    public function getlieu_cinema(){
        return $this->lieu_cinema;
    }
   



    public function setimg_cinema( $img_cinema){
        $this->img_cinema=$img_cinema;
    }
    public function setnom_cinema( $nom_cinema){
        $this->nom_cinema=$nom_cinema;
    }
    public function setlieu_cinema( $lieu_cinema){
        $this->lieu_cinema=$lieu_cinema;

}
}
?>