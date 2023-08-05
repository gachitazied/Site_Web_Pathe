<?php
class contacts{
    private int $id_contact;
    private string $nom_contact;
    private string $prenom_contact;
    private string $email_contact;
    private string $message_contact;

    public function __construct($nom_contact,$prenom_contact, $email_contact,$message_contact){
        $this->nom_contact=$nom_contact;
        $this->prenom_contact=$prenom_contact;
        $this->email_contact=$email_contact;
        $this->message_contact=$message_contact;
    
    }
    public function getid_contact(){
        return $this->id_contact;
    }
    public function getnom_contact(){
        return $this->nom_contact;
    }
    public function getprenom_contact(){
        return $this->prenom_contact;
    }
    public function getemail_contact(){
        return $this->email_contact;
    }
    public function getmessage_contact(){
        return $this->message_contact;
    }



    public function setnom_contact($nom_contact){
        $this->nom_contact=$nom_contact;
    }
    public function setprenom_contact($prenom_contact){
        $this->prenom_contact=$prenom_contact;
    }
    public function setemail_contact( $email_contact){
        $this->email_contact=$email_contact;

}
public function setmessage_contact( $message_contact){
    $this->message_contact=$message_contact;

}
}
?>