<?php
class UserController
{

    protected $user;

    public function __construct()
    {
        session_start();
        //Sécurisation des pages pour ne pas y accèder si on est pas connecté
        if (!array_key_exists("username", $_SESSION)) {
            header("Location: index.php?controller=security&action=login");
        } else {
            $this->user = unserialize($_SESSION["username"]);
        }
    }

    public function getUser()
    {
        return $this->user;
    }
}

?>