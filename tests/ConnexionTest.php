<?php
use PHPUnit\Framework\TestCase;
require "../classes/connexion.php";

class ConnexionTest extends TestCase
{
    public function testInsertionLecturePromenade()
    {
        $connexion = new Connexion();

        $titre ="testPromenade";
        $auteur = "testAuteur";
        $pays = "France";
        $ville = "testVille";
        $codePostal ="000000";
        $depart = "testDepart";
        $arrivee = "testArrive";
        $description = "testDescription";


        $id = $connexion->insertPromenade($titre,$auteur,$pays,$ville,$codePostal,$depart,$arrivee,$description,null);
        $this->assertNotNull($id);
        $promenade = $connexion->getPromenadeById($id);
        $this->assertEquals($titre,$promenade->getTitre());
    }
}