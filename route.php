<?php
require_once 'functions.php';
require_once 'app/Controllers/HomeController.php';
require_once 'app/Controllers/AuthController.php';
require_once 'app/Controllers/DashboardController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$url = str_replace('/AwarePlus', '', $url);

switch ($url) {
    case '/':
        $controller = new HomeController();
        $controller->index();
        break;

    case '/login':
        $controller = new AuthController();
        $controller->showLogin();
        break;

    case '/login/submit':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller = new AuthController();
            $controller->login();
        }
        break;

    case '/signup':
        (new AuthController())->showSignup();
        break;

    case '/signup/submit':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            (new AuthController())->signup();
        }
        break;

    case '/dashboard':
        (new DashboardController())->index();
        break;

    case '/logout':
        session_destroy();
        redirect('/login');
        break;

    default:
        http_response_code(404);
        echo "404 - Page Not Found: " . htmlspecialchars($url);
        break;
}