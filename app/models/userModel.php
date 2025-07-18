<?php
class UserModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function validateLogin($correo, $password)
    {
        $stmt = $this->db->prepare("SELECT * FROM user WHERE correo = ? AND password = ? LIMIT 1");
        $stmt->bind_param("ss", $correo, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function createUser($nombre, $correo, $telefono, $password)
    {
        $rol = 2; // Rol por defecto para usuarios normales
        $stmt = $this->db->prepare("INSERT INTO user (nombre, correo, telefono, password, rol) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $nombre, $correo, $telefono, $password, $rol);
        return $stmt->execute();
    }
    public function checkEmailExists($correo)
    {
        $stmt = $this->db->prepare("SELECT correo FROM user WHERE correo = ? LIMIT 1");
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows > 0;
    }
}
