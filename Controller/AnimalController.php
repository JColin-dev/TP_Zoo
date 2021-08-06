<?php

namespace Controller;

use DAO\AnimalDao;
use DAO\CageDao;
use DAO\NourritureDao;
use DAO\UtilisateurDao;

class AnimalController extends BaseController {

    public function index() {

        $dao = new AnimalDao();

        $listeAnimaux = $dao->findAll();

        $dao = new CageDao();

        $listeCages= $dao->findAll();

        $donnees = compact("listeAnimaux", "listeCages");
        $this->afficherVue("animaux", $donnees);
    }

    public function insertCage() {

        if(isset($_POST["surface"])) {

            $dao = new CageDao();

            $dao->insertCage($_POST["surface"]);

            $this->afficherMessage('Vous avez bien ajouté une cage', 'success');
            $this->redirection("animal/insertCage");   
        }
        
        $this->afficherVue("form_cage");
    }

    public function insertAnimal() {

        $modification = false;

        $dao = new CageDao();
        $listeCages =  $dao->findAll();

        $dao = new NourritureDao();
        $listeNourriture = $dao->findAll();

        $donnees = compact("modification","listeCages", "listeNourriture");

        if(isset($_POST["nom"])) {

            $dao = new AnimalDao();

            $dao->insertAnimal($_POST["nom"], $_POST["age"], isset($_POST["sexe"]), $_POST["cage"]);

            $this->afficherMessage('Vous avez bien ajouté un animal', 'success');
            $this->redirection("animal/index");   
        }

        $this->afficherVue("form_animal", $donnees);
    }

    public function insertNourriture()
    {

        if (isset($_POST["nourriture"])) {

            $dao = new NourritureDao();

            $dao->insertNourriture($_POST["nourriture"]);

            $this->afficherMessage('Vous avez bien ajouté une nourriture', 'success');
            $this->redirection("animal/insertNourriture");
        }

        $this->afficherVue("form_nourriture");
    }

    public function modifierAnimal($parametres)
    {
        if (isset($_POST["nom"])) {

            $id = $parametres[0];

            $dao = new AnimalDao();
            $dao->modifyById($parametres[0], $_POST["nom"], $_POST["age"], $_POST["sexe"], $_POST["cage"]);
        } else {
            $modification = true;

            $dao = new AnimalDao();
            $id = $parametres[0];
            $animal = $dao->findById($id);

            $dao = new CageDao();
            $listeCages =  $dao->findAll();
        }

        $parametres = compact("modification", "id", "animal", "listeCages");
        $this->afficherVue("form_animal", $parametres);
    }
}