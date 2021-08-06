<?php

namespace DAO;

use Connexion;
use PDOException;

class AnimalDao extends BaseDao {

    public function insertAnimal($name, $age, $sexe, $idCage) {

        $connexion = new Connexion();

        $requete = $connexion->prepare("INSERT INTO animal (nom, age, male, id_cage) VALUES (?,?,?,?)");

        $requete->execute(array(
            $name,
            $age,
            $sexe ? 1 : 0,
            $idCage
        ));
    }

    public function modifyById($id, $nom, $age, $sexe, $cage)
    {
        try {
            $connexion = new Connexion();

            $requete = $connexion->prepare("UPDATE animal SET nom = :nom, age = :age, male = :male, cage = :cage WHERE id = :id");

            $requete->execute(
                [
                    ":id" => $id,
                    ":nom" => $nom,
                    ":age" => $age,
                    ":male" => $sexe,
                    ":cage" => $cage
                    
                ]
            );
        } catch (PDOException $e) {
            echo "erreur... :(" . $e->getMessage();
        }
    }
}