<?php
include '../controllers/cinemaC.php';
$cinema=new cinemasC();

if(

    isset($_POST['register-img_cinema'])&&isset($_POST['register-nom_cinema'])&&isset($_POST['register-lieu_cinema'])
  
){
    $cinemas = new cinemas($_POST['register-img_cinema'],$_POST['register-nom_cinema'],$_POST['register-lieu_cinema']);
    $cinema->ajoutercinema($cinemas);
    header('Location: table.php');

}
else
{
echo 'el forum mazelll na9esss hooooooooooooooy';
}
?>