<?php
// SalleController.php
require_once 'app/core/Controller.php';
require_once 'app/models/Salle.php';

class SalleController extends Controller {

    // Liste des salles
    public function index() {
        $salles = Salle::getAll();
        $this->view('salles/list', ['salles' => $salles]);
    }

    // Affichage du formulaire d'ajout
    public function add() {
        $this->view('salles/add');
    }

    // Enregistrer une nouvelle salle
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nom = $_POST['nom'];
            $capacite = $_POST['capacite'];
            Salle::create($nom, $capacite);
            header("Location: /salles");
        }
    }

    // Affichage du formulaire d'édition
    public function edit($id) {
        $salle = Salle::getById($id);
        $this->view('salles/edit', ['salle' => $salle]);
    }

    // Mise à jour d'une salle
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nom = $_POST['nom'];
            $capacite = $_POST['capacite'];
            Salle::update($id, $nom, $capacite);
            header("Location: /salles");
        }
    }

    // Suppression d'une salle
    public function delete($id) {
        Salle::delete($id);
        header("Location: /salles");
    }
}
?>
