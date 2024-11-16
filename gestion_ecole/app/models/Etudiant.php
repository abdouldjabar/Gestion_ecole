<?php
// Etudiant.php
require_once 'app/core/Model.php';

class Etudiant extends Model {

    // Récupérer tous les étudiants
    public static function getAll() {
        $db = self::getDb();
        $query = "SELECT * FROM etudiants";
        $stmt = $db->query($query);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Récupérer un étudiant par son ID
    public static function getById($id) {
        $db = self::getDb();
        $query = "SELECT * FROM etudiants WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    // Créer un étudiant
    public static function create($nom, $prenom, $email) {
        $db = self::getDb();
        $query = "INSERT INTO etudiants (nom, prenom, email) VALUES (:nom, :prenom, :email)";
        $stmt = $db->prepare($query);
        $stmt->execute(['nom' => $nom, 'prenom' => $prenom, 'email' => $email]);
    }

    // Mettre à jour un étudiant
    public static function update($id, $nom, $prenom, $email) {
        $db = self::getDb();
        $query = "UPDATE etudiants SET nom = :nom, prenom = :prenom, email = :email WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->execute([
            'id' => $id,
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email
        ]);
    }

    // Supprimer un étudiant
    public static function delete($id) {
        $db = self::getDb();
        $query = "DELETE FROM etudiants WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->execute(['id' => $id]);
    }
}
?>
