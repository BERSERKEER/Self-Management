<?php

require_once __DIR__ . '/../models/userModel.php';

class RegisterController
{
    private $userModel;

    public function __construct($db)
    {
        $this->userModel = new UserModel($db);
    }

    public function register($nombre, $correo, $telefono, $password)
    {
        if ($this->userModel->checkEmailExists($correo)) {
            return ["success" => false, "message" => "El correo ya está registrado"];
        }

        if ($this->userModel->createUser($nombre, $correo, $telefono, $password)) {
            return ["success" => true, "message" => "Usuario registrado exitosamente"];
        }

        return ["success" => false, "message" => "Error al registrar usuario"];
    }
}
