<?php

require_once __DIR__ . '/../Core/Database.php';

class User {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function findByEmail($email) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($username, $email, $password, $date_of_birth) {
        $stmt = $this->db->prepare("INSERT INTO users (username, email, password, date_of_birth) VALUES (?, ?, ?, ?)");
        $stmt->execute([$username, $email, $password, $date_of_birth]);
    }
}