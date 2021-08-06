<?php

namespace DAO;

use Connexion;
use PDOException;

class UtilisateurDao extends BaseDao
{
    public function findByPseudo($pseudo)
    {
        try {
            $connexion = new Connexion();

            $requete = $connexion->prepare("SELECT * FROM utilisateur WHERE pseudo = :pseudo");

            $requete->execute(
                [
                    ":pseudo" => $pseudo
                ]
            );

            return $this->transformeTableauEnObjet($requete->fetch());
        } catch (PDOException $e) {
            echo "erreur... :(";
        }
    }

    public function insertUser($pseudo, $password)
    {
        try {
            $connexion = new Connexion();

            $requete = $connexion->prepare("INSERT INTO utilisateur (pseudo, mot_de_passe) 
            VALUES (?,?)");
            
            $requete->execute(array(
                $pseudo,
                password_hash($password, PASSWORD_BCRYPT),
            ));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function supprimerAnimal($idAnimal)
    {
        $connexion = new Connexion();

        $requete = $connexion->prepare("DELETE FROM animal
        WHERE id= :id_animal");

        $requete->execute([
            "id_animal" => $idAnimal
        ]);
    }
}