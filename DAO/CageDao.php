<?php

namespace DAO;

use Connexion;

class CageDao extends BaseDao {

    public function insertCage($surface)
    {

        $connexion = new Connexion();

        $requete = $connexion->prepare("INSERT INTO cage (surface) VALUES (?)");

        $requete->execute(array($surface));
    }
    
}