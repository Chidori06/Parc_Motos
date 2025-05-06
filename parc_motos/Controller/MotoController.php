<?php

class MotoController
{
    private $motoManager;

    public function __construct()
    {
        $this->motoManager = new MotoManager();
    }
    public function list()
    {
        $allMotos = $this->motoManager->getAll();

        require "View/motos/list.php";
    }
    public function add()
    {
        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $errors = $this->isValid();

            if (count($errors) == 0) {
                $moto = new Moto(null, $_POST["model"], $_POST["type"], null, $_POST["mark"]);

                if ($_FILES["picture"]["size"] != 0) {
                    $filename = uniqid() . $_FILES["picture"]['name'];
                    $moto->setPicture($filename);
                    move_uploaded_file($_FILES["picture"]["tmp_name"], "Public/uploads/" . $filename);
                }

                $this->motoManager->insert($moto);
                header("Location: index.php?controller=moto&action=list");
            }
        }

        require "View/motos/form.php";
    }
    private function isValid()
    {
        $errors = [];

        if (empty($_POST["mark"])) {
            $errors["mark"] = "Veuillez saisir une marque";
        } else if (strlen($_POST["mark"]) > 250) {
            $errors["mark"] = "La marque est trop longue (250 caractères)";
        }

        if (empty($_POST["model"])) {
            $errors["model"] = "Veuillez saisir un modèle";
        } else if (strlen($_POST["model"]) > 250) {
            $errors["model"] = "Le modèle est trop long (250 caractères)";
        }

        if (empty($_POST["type"])) {
            $errors["type"] = "Veuillez selectionner l'energie";
        } else if (!in_array($_POST["type"], Moto::$allowedType)) {
            $errors["type"] = "Ce type de moto n'existe pas";
        }

        if (array_key_exists("picture", $_FILES)) {
            $image = $_FILES["picture"];
            $allowedFormat = ["image/jpeg", "image/png", "image/webp"];

            if ($image["size"] > 0) {
                if (!in_array($image["type"], $allowedFormat)) {
                    $errors["picture"] = "L'image n'est pas au bon format";
                }

                if ($image["size"] > 250000000) {
                    $errors["picture"] = "Le fichier est trop gros";
                }

                if ($image["error"] != 0 && $image["error"] != 4) {
                    $errors["picture"] = "Une erreur inconnue s'est produite";
                }
            }

        }

        return $errors;
    }
    public function detail($id)
    {
        $moto = $this->motoManager->getOne($id);

        require 'View/motos/detail.php';
    }

    public function delete($id)
    {
        $this->motoManager->delete($id);
        header("Location: index.php?controller=moto&action=list");
    }

    public function sortBy($type)
    {
        $allMotos = $this->motoManager->sortBy($type);

        require "View/motos/list.php";
    }
}




?>