<?php
// Cours.php
require_once 'app/core/Model.php';

class Cours extends Model {

    // Récupérer tous les cours
    public static function getAll() {
        $db = self::getDb();
        $query = "SELECT * FROM cours";
        $stmt = $db->query($query);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Récupérer un cours par son ID
    public static function getById($id) {
        $db = self::getDb();
        $query = "SELECT * FROM cours WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    // Créer un cours
    public static function create($nom_cours, $enseignant_id, $horaire) {
        $db = self::getDb();
        $query = "INSERT INTO cours (nom_cours, enseignant_id, horaire) VALUES (:nom_cours, :enseignant_id, :horaire)";
        $stmt = $db->prepare($query);
        $stmt->execute([
            'nom_cours' => $nom_cours,
            'enseignant_id' => $enseignant_id,
            'horaire' => $horaire
        ]);
    }

    // Mettre à jour un cours
    public static function update($id, $nom_cours, $enseignant_id, $horaire) {
        $db = self::getDb();
        $query = "UPDATE cours SET nom_cours = :nom_cours, enseignant_id = :enseignant_id, horaire = :horaire WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->execute([
            'id' => $id,
            'nom_cours' => $nom_cours,
            'enseignant_id' => $enseignant_id,
            'horaire' => $horaire
        ]);
    }

    // Supprimer un cours
    public static function delete($id) {
        $db = self::getDb();
        $query = "DELETE FROM cours WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->execute(['id' => $id]);
    }
}
?>
