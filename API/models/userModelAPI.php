<?php
class User
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
}
