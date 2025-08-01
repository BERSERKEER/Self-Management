<?php
require_once __DIR__ . '/../models/User.php';

class AuthController
{
    private $user;

    public function __construct($db)
    {
        $this->user = new User($db);
    }

    public function login($data)
    {
        if (!isset($data['correo'], $data['password'])) {
            http_response_code(400);
            echo json_encode(['error' => 'Correo y contraseña requeridos.']);
            return;
        }

        $user = $this->user->validateLogin($data['correo'], $data['password']);

        if ($user) {
            echo json_encode([
                'message' => 'Login exitoso',
                'user' => [
                    'id' => $user['id'],
                    'nombre' => $user['nombre'],
                    'rol' => $user['rol']
                ]
            ]);
        } else {
            http_response_code(401);
            echo json_encode(['error' => 'Credenciales inválidas']);
        }
    }
}
