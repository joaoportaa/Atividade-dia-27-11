<?php
class AuthController {
    private $userModel;

    public function __construct($pdo) {
        $this->userModel = new User($pdo);
    }

    public function login() {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $user = $this->userModel->login($email, $password);
            
            if ($user) {
                $_SESSION['user'] = $user;
                header('Location: index.php?page=perfil');
                exit;
            } else {
                $error = "Conta não cadastrada ou senha incorreta!";
            }
        }
        require 'views/header.php';
        require 'views/login.php';
        require 'views/footer.php';
    }

    public function register() {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if ($this->userModel->register($name, $email, $password)) {
                echo "<script>alert('Cadastro realizado! Faça login.'); window.location='index.php?page=login';</script>";
                exit;
            } else {
                $error = "E-mail já cadastrado!";
            }
        }
        require 'views/header.php';
        require 'views/cadastro.php';
        require 'views/footer.php';
    }

    public function logout() {
        session_destroy();
        header('Location: index.php');
    }
}
?>