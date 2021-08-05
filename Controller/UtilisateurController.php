<?php

namespace Controller;

use Connexion;
use DAO\UtilisateurDao;

class UtilisateurController extends BaseController {

    public function connexion() {

    $dao = new UtilisateurDao();

        if (isset($_POST["pseudo"])) {
            $utilisateur = $dao->findByPseudo($_POST["pseudo"]);

            if (password_verify($_POST["password"], $utilisateur->getMotDePasse())) {
                $_SESSION["utilisateur"] = serialize($utilisateur);
                $this->afficherMessage('Vous êtes bien connecté', 'success');
                $this->redirection();
            } else {
                $this->afficherMessage('Mauvais mot de passe', 'danger');
            }
        }

        $this->afficherVue("login");
    }

    public function deconnexion()
    {
        session_unset();
        session_destroy();
        session_start();
        $this->afficherMessage('Vous êtes bien déconnecté', 'success');
        $this->redirection();
    }
}