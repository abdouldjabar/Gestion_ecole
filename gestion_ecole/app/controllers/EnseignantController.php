<?php
// EnseignantController.php
require_once 'app/core/Controller.php';
require_once 'app/models/Enseignant.php';

class EnseignantController extends Controller {

    // Liste des enseignants
    public function index() {
        $enseignants = Enseignant::getAll();
        $this->view('enseignants/list', ['enseignants' => $enseignants]);
    }

    // Affichage du formulaire d'ajout
    public function add() {
        $this->view('enseignants/add');
    }

    // Enregistrer un nouvel enseignant
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            Enseignant::create($nom, $prenom, $email);
            header("Location: /enseignants");
        }
    }

    // Affichage du formulaire d'édition
    public function edit($id) {
        $enseignant = Enseignant::getById($id);
        $this->view('enseignants/edit', ['enseignant' => $enseignant]);
    }

    // Mise à jour d'un enseignant
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            Enseignant::update($id, $nom, $prenom, $email);
            header("Location: /enseignants");
        }
    }

    // Suppression d'un enseignant
    public function delete($id) {
        Enseignant::delete($id);
        header("Location: /enseignants");
    }
}
?>
