<?php
session_start();

require_once 'models/UserModel.php';

class LoginController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userModel = new UserModel();
            $user = $userModel->checkUser($username, $password);

            if ($user) {
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];
                header("Location: index.php");
            } else {
                echo "Credenciales incorrectas.";
            }
        }
        require_once 'views/login_view.php';
    }

    public function logout() {
        session_destroy();
        header("Location: index.php");
    }
}
?>
