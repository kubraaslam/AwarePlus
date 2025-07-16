<?php

class DashboardController {
    public function index() {
        // Check if user is logged in
        if (!isset($_SESSION['user'])) {
            redirect('/login');
            exit;
        }

        $user = $_SESSION['user'];
        require_once __DIR__ . '/../Views/dashboard.view.php';
    }
}
