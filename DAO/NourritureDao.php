<?php 

namespace DAO;

use Connexion;

class NourritureDao extends BaseDao {

    public function insertNourriture($nourriture)
    {

        $connexion = new Connexion();

        $requete = $connexion->prepare("INSERT INTO nourriture (designation) VALUES (?)");

        $requete->execute(array($nourriture));
    }
}