<?php
// Enseignant.php
require_once 'app/core/Model.php';

class Enseignant extends Model {

    // Récupérer tous les enseignants
    public static function getAll() {
        $db = self::getDb();
        $query = "SELECT * FROM enseignants";
        $stmt = $db->query($query);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Récupérer un enseignant par son ID
    public static function getById($id) {
        $db = self::getDb();
        $query = "SELECT * FROM enseignants WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    // Créer un enseignant
    public static function create($nom, $prenom, $email) {
        $db = self::getDb();
        $query = "INSERT INTO enseignants (nom, prenom, email) VALUES (:nom, :prenom, :email)";
        $stmt = $db->prepare($query);
        $stmt->execute(['nom' => $nom, 'prenom' => $prenom, 'email' => $email]);
    }

    // Mettre à jour un enseignant
    public static function update($id, $nom, $prenom, $email) {
        $db = self::getDb();
        $query = "UPDATE enseignants SET nom = :nom, prenom = :prenom, email = :email WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->execute([
            'id' => $id,
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email
        ]);
    }

    // Supprimer un enseignant
    public static function delete($id) {
        $db = self::getDb();
        $query = "DELETE FROM enseignants WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->execute(['id' => $id]);
    }
}
?>
