<?php
// EtudiantController.php
require_once 'app/core/Controller.php';
require_once 'app/models/Etudiant.php';

class EtudiantController extends Controller {

    // Liste des étudiants
    public function index() {
        $etudiants = Etudiant::getAll();
        $this->view('etudiants/list', ['etudiants' => $etudiants]);
    }

    // Affichage du formulaire d'ajout
    public function add() {
        $this->view('etudiants/add');
    }

    // Enregistrer un nouvel étudiant
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $this->view('etudiants/store');
            Etudiant::create($nom, $prenom, $email);
            header("Location: /etudiants");
        }
    }

    // Affichage du formulaire d'édition
    public function edit($id) {
        $etudiant = Etudiant::getById($id);
        $this->view('etudiants/edit', ['etudiant' => $etudiant]);
    }

    // Mise à jour d'un étudiant
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            Etudiant::update($id, $nom, $prenom, $email);
            header("Location: /etudiants");
        }
    }

    // Suppression d'un étudiant
    public function delete($id) {
        Etudiant::delete($id);
        header("Location: /etudiants");
    }
}
?>
