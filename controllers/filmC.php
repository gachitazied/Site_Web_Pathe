<?php
    include_once '../config.php';
    include '../models/film.php';
    class filmsC{
        function afficherfilm(){
            $sql="SELECT * FROM films ";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch(Exception $e){
                die('Erreur:' . $e->getMessage());
            }
        }
    
        function afficherAboutfilm($id_film) {
            $sql = "SELECT * FROM films WHERE id_film = :id_film";
            $db = config::getConnexion();
            
            try {
                $stmt = $db->prepare($sql);
                $stmt->bindParam(':id_film', $id_film, PDO::PARAM_INT);
                $stmt->execute();
                $liste = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $liste;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }
        

        function recupererFilm1($id_film){
            $sql="SELECT * from films where id_film=$id_film";
            $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        $query->execute();
        $cinemas=$query->fetch();
        return $cinemas;
        }catch (Exception $e){
            $e->getMessage();}
        }


        function supprimerfilm($id_film){
            $sql=" DELETE FROM films WHERE id_film=:id_film";
            $db = config::getConnexion();
            $req = $db->prepare($sql);
            $req->bindValue(':id_film' , $id_film);
            try{
                $req->execute();
            }
            catch(Exception $e){
                die('Erreur:' . $e->getMessage());
            }
        }
        function ajouterfilm($films){
    
        $sql = "INSERT INTO films (img_film, nom_film, desc_film, genre_film, dure_film, salle_film ,id_cinema)
                    VALUES ( :img_film,  :nom_film,  :desc_film, :genre_film, :dure_film, :salle_film, :id_cinema)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute([
                    'img_film' => $films->getimg_film(),
                    'nom_film' => $films->getnom_film(),
                    'desc_film' => $films->getdesc_film(),
                    'genre_film' => $films->getgenre_film(),
                    'dure_film' => $films->getdure_film(),
                    'salle_film' => $films->getsalle_film(),
                    'id_cinema' => $films->getid_cinema()
                
        
            ]);
            $_SESSION['error']="data add seccsesfuly";
    } catch (Exception $e){
        $e->getMessage();
    }

        }


        function modifierfilm($id_film,$films){
            try{
            $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE films SET 
                        id_film = :id_film,
                        img_film = :img_film,
                        nom_film = :nom_film,
                        desc_film = :desc_film,
                        genre_film = :genre_film,
                        dure_film = :dure_film,
                        salle_film = :salle_film
                        
                        
                    WHERE id_film = :id_film'
                );
                $query->execute([
                    'id_film' => $id_film,
                    'img_film' => $films->getimg_film(),
                    'nom_film' => $films->getnom_film(),
                    'desc_film' => $films->getdesc_film(),
                    'genre_film' => $films->getgenre_film(),
                    'dure_film' => $films->getdure_film(),
                    'salle_film' => $films->getsalle_film()
        
    ]);
        } catch (Exception $e){
            $e->getMessage();
    }}

    function recupererfilm($id_film,$id_cinema){
        $sql="SELECT * FROM films INNER JOIN cinemas on films.id_cinema = cinemas.id_cinema WHERE cinemas.id_cniema = $id_cinema AND id_film=$id_film";
        $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
    $query->execute();
    $evenement=$query->fetch();
    return $evenement;
    }catch (Exception $e){
        $e->getMessage();}
    }
    function joincinema($id_cinema){
        $sql=("SELECT * FROM films INNER JOIN cinemas on films.id_cinema = cinemas.id_cinema WHERE cinemas.id_cinema = $id_cinema");
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }

    function affichertriFilm(){
			
        $sql="SELECT * FROM films ORDER BY nom_film ";
        $db = config::getConnexion();
        try{
            $cinemas = $db->query($sql);
            return $cinemas;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    function afficherRechercheFilm($rech){
                
        $sql = "SELECT * FROM films WHERE nom_film LIKE '%$rech%' OR genre_film LIKE '%$rech%' ";
    
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