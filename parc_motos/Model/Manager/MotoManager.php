<?php

class MotoManager extends DbManager
{

    public function getAll()
    {
        $query = $this->bdd->query("SELECT * FROM motos");
        $resultsArray = $query->fetchAll();

        $objectArray = [];

        foreach ($resultsArray as $result) {
            $objectArray[] = new Moto(
                $result["id"], $result["model"], $result["type"],
                $result["picture"], $result["mark"]);
        }

        return $objectArray;
    }

    public function insert(Moto $moto)
    {
        $query = $this->bdd->prepare("INSERT INTO motos
    (model, type, picture, mark)
    VALUES (:model, :type, :picture, :mark)");

        $query->execute(
            [
                "model" => $moto->getModel(),
                "type" => $moto->getType(),
                "picture" => $moto->getPicture(),
                "mark" => $moto->getMark()

            ]
        );
    }
    public function getOne($id)
    {
        $query = $this->bdd->prepare("SELECT * FROM motos WHERE id = :id");

        $query->execute([
            "id" => $id
        ]);

        $result = $query->fetch();


        $object = null;

        if ($result) {
            $object = new Moto(
                $result["id"], $result["model"], $result["type"],
                $result["picture"], $result["mark"]);
        }


        return $object;
    }

    public function delete($id)
    {
        $query = $this->bdd->prepare("DELETE FROM motos WHERE id = :id");
        $query->execute([
            "id" => $id
        ]);
    }
    public function sortBy($type)
    {
        $query = $this->bdd->prepare("SELECT * FROM motos WHERE type = :type ORDER BY model");
        $query->execute(['type' => $type]);
        $resultsArray = $query->fetchAll();

        $objectArray = [];
        foreach ($resultsArray as $result) {
            $objectArray[] = new Moto(
                $result["id"], $result["model"], $result["type"],
                $result["picture"], $result["mark"]);
        }
        return $objectArray;
    }

}






?>