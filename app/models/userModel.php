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
}
