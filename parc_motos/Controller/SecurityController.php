<?php

class SecurityController
{

    private $userManager;

    public function __construct()
    {
        $this->userManager = new UserManager();
    }


    public function login()
    {
        $error = false;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = $this->userManager->findByUsername($_POST["username"]);
            //Verification du mot de passe
            if ($user) {
                if (password_verify($_POST["password"], $user->getPassword())) {
                    session_start();
                    $_SESSION["user"] = serialize($user);
                    header("Location: index.php?controller=moto&action=list");
                } else {
                    $error = true;
                }
            } else {
                $error = true;
            }
        }

        require 'View/security/login.php';
    }


    private function isValidRegisterForm()
    {

        $errors = [];

        if (empty($_POST["user"])) {
            $errors["user"] = "Veuillez saisir un nom d'utilisateur";
        }
        //Verification mot de passe
        if (empty($_POST["password"])) {
            $errors["password"] = "Veuillez saisir un mot de passe";
        } elseif (strlen($_POST["password"]) < 9) {
            $errors["password"] = "Le mot de passe doit faire au moins 8 caractères";
        }
        return $errors;
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header("Location: index.php?controller=security&action=login");
    }


}

?>