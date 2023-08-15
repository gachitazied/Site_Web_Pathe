<?php
class inscris{
    private int $id_inscri;
    private string $nom_inscri;
    private string $prenom_inscri;
    private string $email_inscri;
    private string $telephone_inscri;
    private string $nombre_inscri;
    private string $message_inscri;
    private string $nom_offre;
    private int $id_offre;
   
    public function __construct($nom_inscri, $prenom_inscri, $email_inscri, $telephone_inscri, $nombre_inscri, $message_inscri, $nom_offre, $id_offre){
     
        $this->nom_inscri = $nom_inscri;
        $this->prenom_inscri = $prenom_inscri;  
        $this->email_inscri = $email_inscri;  
        $this->telephone_inscri = $telephone_inscri;  
        $this->nombre_inscri = $nombre_inscri;  
        $this->message_inscri = $message_inscri;  
        $this->nom_offre = $nom_offre;  
        $this->id_offre = $id_offre;
    }
    
    public function getid_inscri(){
        return $this->id_inscri;
    }
    
    public function getnom_inscri(){
        return $this->nom_inscri;
    }
    
    public function getprenom_inscri(){
        return $this->prenom_inscri;
    }

    public function getemail_inscri(){
        return $this->email_inscri;
    }
    public function gettelephone_inscri(){
        return $this->telephone_inscri;
    }
    public function getnombre_inscri(){
        return $this->nombre_inscri;
    }
    public function getmessage_inscri(){
        return $this->message_inscri;
    }
    public function getnom_offre(){
        return $this->nom_offre;
    }
    public function getid_offre(){
        return $this->id_offre;
    }














    public function setnom_inscri($nom_inscri){
        $this->nom_inscri = $nom_inscri;
    }
    
    public function setprenom_inscri($prenom_inscri){
        $this->prenom_inscri = $prenom_inscri;
    }
    public function setemail_inscri($email_inscri){
        $this->email_inscri = $email_inscri;
    }
    public function settelephone_inscri($telephone_inscri){
        $this->telephone_inscri = $telephone_inscri;
    }
    public function setnombre_inscri($nombre_inscri){
        $this->nombre_inscri = $nombre_inscri;
    }
    public function setmessage_inscri($message_inscri){
        $this->message_inscri = $message_inscri;
    }
    public function setnom_offre($nom_offre){
        $this->nom_offre = $nom_offre;
    }
    
    public function setid_offre($id_offre){
        $this->id_offre = $id_offre;
    }
}
?>
