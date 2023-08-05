<?php
    include_once '../config.php';
    include '../models/date.php';
    class datesC{
        function afficherdate(){
            $sql="SELECT * FROM dates ";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch(Exception $e){
                die('Erreur:' . $e->getMessage());
            }
        }
        function supprimerdate($id_date){
            $sql=" DELETE FROM dates WHERE id_date=:id_date";
            $db = config::getConnexion();
            $req = $db->prepare($sql);
            $req->bindValue(':id_date' , $id_date);
            try{
                $req->execute();
            }
            catch(Exception $e){
                die('Erreur:' . $e->getMessage());
            }
        }
        function ajouterdate($dates){
    
        $sql = "INSERT INTO dates (date_date, heure_date, id_film)
                    VALUES ( :date_date,  :heure_date, :id_film)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute([
                    'date_date' => $dates->getdate_date(),
                    'heure_date' => $dates->getheure_date(),
                    'id_film' => $dates->getid_film()       
        
            ]);
            $_SESSION['error']="data add seccsesfuly";
    } catch (Exception $e){
        $e->getMessage();
    }

        }


        function modifierdate($id_date,$dates){
            try{
            $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE dates SET 
                        id_date = :id_date,
                        date_date = :date_date,
                        heure_date = :heure_date

                        
                        
                    WHERE id_date = :id_date'
                );
                $query->execute([
                    'id_date' => $id_date,
                    'date_date' => $dates->getdate_date(),
                    'heure_date' => $dates->getheure_date()
    

        
    ]);
        } catch (Exception $e){
            $e->getMessage();
    }}

    function recupererdate($id_date,$id_film){
        $sql="SELECT * FROM dates INNER JOIN films on dates.id_film = films.id_film WHERE films.id_film = $id_film AND id_date=$id_date";
        $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
    $query->execute();
    $evenement=$query->fetch();
    return $evenement;
    }catch (Exception $e){
        $e->getMessage();}
    }
    function joinfilm($id_film){
        $sql=("SELECT * FROM dates INNER JOIN films on dates.id_film = films.id_film WHERE films.id_film = $id_film");
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    }
    ?>