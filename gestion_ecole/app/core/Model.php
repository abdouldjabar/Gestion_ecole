<?php

class Model {
    protected $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=ecole;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // Exécuter une requête
    public function query($query) {
        return $this->db->query($query);
    }
}
?>
