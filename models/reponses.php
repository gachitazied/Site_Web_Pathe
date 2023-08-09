<?php
class reponses{
    private int $id_reponse;
    private string $email_reponse;
    private string $reponse_reponse;
    private int $id_contact;
   
    public function __construct($email_reponse, $reponse_reponse, $id_contact){
     
        $this->email_reponse = $email_reponse;
        $this->reponse_reponse = $reponse_reponse;  
        $this->id_contact = $id_contact;
    }
    
    public function getid_reponse(){
        return $this->id_reponse;
    }
    
    public function getemail_reponse(){
        return $this->email_reponse;
    }
    
    public function getreponse_reponse(){
        return $this->reponse_reponse;
    }

    public function getid_contact(){
        return $this->id_contact;
    }

    public function setemail_reponse($email_reponse){
        $this->email_reponse = $email_reponse;
    }
    
    public function setreponse_reponse($reponse_reponse){
        $this->reponse_reponse = $reponse_reponse;
    }
    
    public function setid_contact($id_contact){
        $this->id_contact = $id_contact;
    }
}
?>
