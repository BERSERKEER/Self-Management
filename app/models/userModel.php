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
        $query = "SELECT * FROM user WHERE correo = ? AND password = ? LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ss", $correo, $password);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function createUser($nombre, $correo, $telefono, $password)
    {
        $rol = 3; // Usuario normal por defecto
        $query = "INSERT INTO user (nombre, correo, telefono, password, rol) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ssssi", $nombre, $correo, $telefono, $password, $rol);
        return $stmt->execute();
    }

    public function checkEmailExists($correo)
    {
        $query = "SELECT correo FROM user WHERE correo = ? LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        return $stmt->get_result()->num_rows > 0;
    }
}
