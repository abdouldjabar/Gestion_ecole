<?php

class Controller {
    protected $model;
    protected $view;

    public function __construct() {
        $this->view = new View();
    }

    // Charger un modèle
    public function loadModel($modelName) {
        require_once "../app/models/$modelName.php";
        $this->model = new $modelName();
    }
}
?>
