<?php

class Promenade{

    private $id;
    private $titre;
    private $auteur;
    private $pays;
    private $ville;
    private $zipCode;
    private $depart;
    private $arrivee;
    private $description;
    private $photo;

    public function __set($name, $value){}

    public function getId(){
        return $this->id;
    }
    public function getTitre(){
        return $this->titre;
    }
    public function getAuteur(){
        return $this->auteur;
    }
    public function getPays(){
        return $this->pays;
    }
    public function getVille(){
        return $this->ville;
    }
    public function getZipCode(){
        return $this->zipCode;
    }
    public function getDepart(){
        return $this->depart;
    }
    public function getArrivee(){
        return $this->arrivee;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getPhoto(){
        return $this->photo;
    }
}
?>