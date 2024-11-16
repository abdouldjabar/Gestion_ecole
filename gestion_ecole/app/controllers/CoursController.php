<?php
// CoursController.php
require_once 'app/core/Controller.php';
require_once 'app/models/Cours.php';
require_once 'app/models/Enseignant.php';

class CoursController extends Controller {

    // Liste des cours
    public function index() {
        $cours = Cours::getAll();
        $this->view('cours/list', ['cours' => $cours]);
    }

    // Affichage du formulaire d'ajout
    public function add() {
        $enseignants = Enseignant::getAll();
        $this->view('cours/add', ['enseignants' => $enseignants]);
    }

    // Enregistrer un nouveau cours
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nom_cours = $_POST['nom_cours'];
            $enseignant_id = $_POST['enseignant_id'];
            $horaire = $_POST['horaire'];
            Cours::create($nom_cours, $enseignant_id, $horaire);
            header("Location: /cours");
        }
    }

    // Affichage du formulaire d'édition
    public function edit($id) {
        $course = Cours::getById($id);
        $enseignants = Enseignant::getAll();
        $this->view('cours/edit', ['course' => $course, 'enseignants' => $enseignants]);
    }

    // Mise à jour d'un cours
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nom_cours = $_POST['nom_cours'];
            $enseignant_id = $_POST['enseignant_id'];
            $horaire = $_POST['horaire'];
            Cours::update($id, $nom_cours, $enseignant_id, $horaire);
            header("Location: /cours");
        }
    }

    // Suppression d'un cours
    public function delete($id) {
        Cours::delete($id);
        header("Location: /cours");
    }
}
?>
