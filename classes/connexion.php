<?php

include "class_promenade.php";

class Connexion{

    private $connexion;

    public function __construct(){
        $dbName = "SitePromenade";
        $login = "adminPromenade";
        $pswd = "Pr0men@de";
        try{
            $this->connexion = new PDO(
                "mysql:host=localhost; dbname=$dbName; charset=utf8"
                , $login
                , $pswd);
        }catch(Exception $e){
            die("Erreur : ".$e->getMessage());
        }
    }

    public function getConnexion(){
        return $this->connexion;
    }

    ///////////////////////////////

    public function getAllPromenades(){
        $stmt = $this->connexion->prepare(
            "SELECT p.ID as id, p.titre, p.auteur, p.pays, p.ville, p.codePostal as zipCode, p.depart, p.arrivee, p.descr as description, p.photo
            FROM Promenade p"
        );
        $stmt->execute();
        $promenades = $stmt->fetchAll(PDO::FETCH_CLASS, 'Promenade');

        return $promenades;
    }

    public function getPromenadeById($id){
        $stmt = $this->connexion->prepare(
            "SELECT p.ID as id, p.titre, p.auteur, p.pays, p.ville, p.codePostal as zipCode, p.depart, p.arrivee, p.descr as description, p.photo
            FROM Promenade p WHERE p.ID = :idPromenade"
        );
        $stmt->execute(array("idPromenade"=>$id));
        $promenade = $stmt->fetchObject('Promenade');

        return $promenade;
    }

    public function insertPromenade($titre, $auteur, $pays, $ville, $codePostal, $depart, $arrivee, $description, $photo){
        $stmt = $this->connexion->prepare(
            "INSERT INTO Promenade (titre, auteur, pays, ville, codePostal, depart, arrivee, descr, photo)
            VALUES (:titre, :auteur, :pays, :ville, :codePostal, :depart, :arrivee, :descr, :photo)"
        );
        $stmt->execute(array(
            "titre"=>$titre,
            "auteur"=>$auteur,
            "pays"=> $pays,
            "ville"=>$ville,
            "codePostal"=>$codePostal,
            "depart"=>$depart,
            "arrivee"=>$arrivee,
            "descr"=>$description,
            "photo"=>$photo
        ));
        
        return $this->connexion->lastInsertId();
    }

}

?>