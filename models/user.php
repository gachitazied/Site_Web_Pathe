<?php
class users{
    private  $id_user;
    private  $nom_user;
    private  $prenom_user;
    private  $num_tel;
    private  $adresse_user;
    private  $role;
    private  $email_user;
    private  $password;
    



    public function __construct($nom_user,$prenom_user,$num_tel,$adresse_user,$role,$email_user,$password){
        $this->nom_user=$nom_user;
        $this->prenom_user=$prenom_user;
        $this->num_tel=$num_tel;
        $this->adresse_user=$adresse_user;
        $this->role=$role;
        $this->email_user=$email_user;
        $this->password=$password;
    }
   

  
    

    public function getid_user(){
        return $this->id_user;
    }
    public function getnom_user(){
        return $this->nom_user;
    }
    public function getprenom_user(){
        return $this->prenom_user;
    }
    public function getnum_tel(){
        return $this->num_tel;
    }
    public function getadresse_user(){
        return $this->adresse_user;
    }
    public function getrole(){
        return $this->role;
    }
    public function getemail_user(){
        return $this->email_user;
    }
    public function getpassword(){
        return $this->password;
    }
    



    public function setnom_user( $nom_user){
        $this->nom_user=$nom_user;
    }
    public function setprenom_user( $prenom_user){
        $this->prenom_user=$prenom_user;
    }
    public function setnum_tel( $num_tel){
        $this->num_tel=$num_tel;
    }
    public function setadresse_user( $adresse_user){
        $this->adresse_user=$adresse_user;
    }
    public function setrole( $role){
        $this->role=$role;
    }
    public function setemail_user( $email_user){
        $this->email_user=$email_user;
    }
    public function setpassword( $password){
        $this->password=$password;
    }


    
  
}

?>