<?php
class offres{
    private int $id_offre;
    private string $img_offre;
    private string $nom_offre;
    private string $desc_offre;
    private  $date_offre;
    


    public function __construct($img_offre,$nom_offre, $desc_offre, $date_offre){
        $this->img_offre=$img_offre;
        $this->nom_offre=$nom_offre;
        $this->desc_offre=$desc_offre;
        $this->date_offre=$date_offre;
    
    }
    public function getid_offre(){
        return $this->id_offre;
    }
    public function getimg_offre(){
        return $this->img_offre;
    }
    public function getnom_offre(){
        return $this->nom_offre;
    }
    public function getdesc_offre(){
        return $this->desc_offre;
    }
    public function getdate_offre(){
        return $this->date_offre;
    }
   



    public function setimg_offre( $img_offre){
        $this->img_offre=$img_offre;
    }
    public function setnom_offre( $nom_offre){
        $this->nom_offre=$nom_offre;
    }
    public function setdesc_offre( $desc_offre){
        $this->desc_offre=$desc_offre;

}
public function setdate_offre( $date_offre){
    $this->date_offre=new DateTime($date_offre);
}

}
?>