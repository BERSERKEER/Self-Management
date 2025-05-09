<?php

class UserModel {
    private $db;

    public function __construct() {
        $this->db = new mysqli("localhost", "root", "", "login_system");
        if ($this->db->connect_error) {
            die("Conexión fallida: " . $this->db->connect_error);
        }
    }

    public function checkUser($username, $password) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}
?>
