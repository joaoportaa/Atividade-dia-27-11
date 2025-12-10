<?php
session_start();

require_once 'config/db.php'; 

require_once 'model/User.php';
require_once 'model/Bloco.php';

require_once 'controller/Home.php';
require_once 'controller/Auth.php';
require_once 'controller/Perfil.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;
        
    case 'login':
        $controller = new AuthController($pdo);
        $controller->login();
        break;
        
    case 'cadastro':
        $controller = new AuthController($pdo);
        $controller->register();
        break;
        
    case 'logout':
        $controller = new AuthController($pdo);
        $controller->logout();
        break;
        
    case 'perfil':
        $controller = new ProfileController($pdo);
        $controller->index();
        break;
        
    default:
        $controller = new HomeController();
        $controller->index();
        break;
}
?>