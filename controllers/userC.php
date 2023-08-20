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

function afficherRecherche($rech){
			
    $sql="SELECT * FROM users where nom_user like '%$rech%'";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
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

function login() {
    $base = config::getConnexion();

    $query = "SELECT * FROM users WHERE email_user = ? LIMIT 1";
    
    try {
        $stmt = $base->prepare($query);
        $stmt->execute([$this->email_user]);

        if ($stmt->rowCount() !== 1) {
            header('Location: ../views/signin.php?error=invalid');
            exit();
        }

        $user = $stmt->fetch(PDO::FETCH_OBJ);

        if (password_verify($this->password, $user->password)) {
            session_start();
            $_SESSION['user'] = $user;

            if ($user->role === "client") {
                header('Location: ../views/index.php');
                exit();
            } elseif ($user->role === "admin") {
                header('Location: ../views/table.php');
                exit();
            }
        } else {
            header('Location: ../views/signin.php?error=incorrect');
            exit();
        }
    } catch (PDOException $e) {
        echo 'Erreur: ' . $e->getMessage();
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



}
?>