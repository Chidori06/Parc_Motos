<?php
class Moto
{
    public static $allowedType = ["Enduro", "Custom", "Sportive", "Roadster"];
    private $id;
    private $model;
    private $type;
    private $picture;
    private $mark;

    public function __construct($id, $model, $type, $picture, $mark)
    {
        $this->id = $id;
        $this->model = $model;
        $this->type = $type;
        $this->picture = $picture;
        $this->mark = $mark;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getModel()
    {
        return htmlentities($this->model);
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getPicture()
    {
        return $this->picture;
    }
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }
    public function getMark()
    {
        return htmlentities($this->mark);
    }
    public function setMark($mark)
    {
        $this->mark = $mark;
    }


}





?>