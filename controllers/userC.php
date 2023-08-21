<?php
include '..\config.php';
include '..\models\user.php';
class usersC {
    function afficheruser(){
        $sql="SELECT * FROM users";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   
    function supprimeruser($id_user){
        $sql=" DELETE FROM users WHERE id_user=:id_user";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_user' , $id_user);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function ajouteruser($users){

       $sql = "INSERT INTO users (nom_user,prenom_user,num_tel,adresse_user,role,email_user,password)
                 VALUES (:nom_user, :prenom_user,:num_tel,:adresse_user,:role,:email_user,:password)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'nom_user'=> $users->getnom_user(),
            'prenom_user'=> $users->getprenom_user(),
            'num_tel'=> $users->getnum_tel(),
            'adresse_user'=> $users->getadresse_user(),
            'role'=> $users->getrole(),
            'email_user'=> $users->getemail_user(),
            'password'=> $users->getpassword(),
         
       
        ]);
        $_SESSION['error']="data add seccsesfuly";
} catch (Exception $e){
    $e->getMessage();
}

    }
    function ajouteruser1($users){

        $sql = "INSERT INTO users (nom_user,prenom_user,num_tel,adresse_user,email_user,password)
                  VALUES (:nom_user, :prenom_user,:num_tel,:adresse_user,:email_user,:password)";
     $db = config::getConnexion();
     try{
         $query = $db->prepare($sql);
         $query->execute([
             'nom_user'=> $users->getnom_user(),
             'prenom_user'=> $users->getprenom_user(),
             'num_tel'=> $users->getnum_tel(),
             'adresse_user'=> $users->getadresse_user(),
     
             'email_user'=> $users->getemail_user(),
             'password'=> $users->getpassword(),
          
        
         ]);
         $_SESSION['error']="data add seccsesfuly";
 } catch (Exception $e){
     $e->getMessage();
 }
 
     }
function modifieruser($id_user,$users){
       try{
        $db = config::getConnexion();
$query = $db->prepare('UPDATE users SET nom_user = :nom_user, prenom_user= :prenom_user, num_tel= :num_tel, adresse_user= :adresse_user, role= :role, email_user= :email_user, password=:password  WHERE id_user= :id_user');
$query->execute([
    'nom_user'=> $users->getnom_user(),
    'prenom_user'=> $users->getprenom_user(),
    'num_tel'=> $users->getnum_tel(),
    'adresse_user'=> $users->getadresse_user(),
    'role'=> $users->getrole(),
    'email_user'=> $users->getemail_user(),
    'password'=> $users->getpassword(),  
    'id_user'=> $id_user
]);
    } catch (Exception $e){
        $e->getMessage();
}}

function modifierpass($email,$users){
    try{
     $db = config::getConnexion();
$query = $db->prepare('UPDATE users SET password=:password  WHERE email_user= :email');
$query->execute([
 'password'=> $users->getpassword(),  
 'email_user'=> $email,
]);
 } catch (Exception $e){
     $e->getMessage();
}}


function recupereruser($id_user){
    $sql="SELECT * from users where id_user=$id_user";
    $db = config::getConnexion();
try{
    $query = $db->prepare($sql);
$query->execute();
$users=$query->fetch();
return $users;
}catch (Exception $e){
    $e->getMessage();}
}

function recupererpass($email){
    $sql="SELECT * from users where email_user= '$email'";
    $db = config::getConnexion();
try{
    $query = $db->prepare($sql);
$query->execute();
$users=$query->fetch();
return $users;
}catch (Exception $e){
    $e->getMessage();}

}





}
function affichertriUser(){
			
    $sql="SELECT * FROM users ORDER BY nom_user";
    $db = config::getConnexion();
    try{
        $cinemas = $db->query($sql);
        return $cinemas;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}
function afficherRechercheUser($rech){
			
    $sql = "SELECT * FROM users WHERE nom_user LIKE '%$rech%' OR prenom_user LIKE '%$rech%' OR email_user LIKE '%$rech%' OR role LIKE '%$rech%'";

    $db = config::getConnexion();
    try{
        $cinemas = $db->query($sql);
        return $cinemas;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}




?>