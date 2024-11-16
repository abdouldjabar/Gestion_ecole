<?php
require_once '../app/core/Model.php';

class Salle extends Model {

    // Récupère toutes les salles
    public function getAll() {
        $query = "SELECT * FROM salles";
        $this->query($query);
        return $this->resultSet();
    }

    // Récupère une salle par son ID
    public function getById($id) {
        $query = "SELECT * FROM salles WHERE id_salle = :id";
        $this->query($query);
        $this->bind(':id', $id);
        return $this->single();
    }

    // Ajoute une salle
    public function add($data) {
        $query = "INSERT INTO salles (nom, capacite) VALUES (:nom, :capacite)";
        $this->query($query);
        $this->bind(':nom', $data['nom']);
        $this->bind(':capacite', $data['capacite']);
        return $this->execute();
    }

    // Met à jour une salle
    public function update($id, $data) {
        $query = "UPDATE salles SET nom = :nom, capacite = :capacite WHERE id_salle = :id";
        $this->query($query);
        $this->bind(':id', $id);
        $this->bind(':nom', $data['nom']);
        $this->bind(':capacite', $data['capacite']);
        return $this->execute();
    }

    // Supprime une salle
    public function delete($id) {
        $query = "DELETE FROM salles WHERE id_salle = :id";
        $this->query($query);
        $this->bind(':id', $id);
        return $this->execute();
    }
}
?>
