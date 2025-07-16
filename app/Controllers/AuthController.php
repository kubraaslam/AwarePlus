<?php

require_once __DIR__ . '/../Models/User.php';

class AuthController {
    public function showLogin() {
        require_once __DIR__ . '/../Views/login.view.php';
    }

    public function login() {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $userModel = new User();
        $user = $userModel->findByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            redirect('/dashboard');
        } else {
            $_SESSION['error'] = "Invalid email or password.";
            redirect('/login');
        }
    }

    public function showSignup() {
        require_once __DIR__ . '/../Views/signup.view.php';
    }

    public function signup() {
        $username = $_POST['username'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $date_of_birth = $_POST['date_of_birth'] ?? '';

        if (!$username || !$email || !$password || !$date_of_birth) {
            $_SESSION['error'] = "All fields are required.";
            redirect('/signup');
            return;
        }

        $userModel = new User();
        $existing = $userModel->findByEmail($email);

        if ($existing) {
            $_SESSION['error'] = "Email already registered.";
            redirect('/signup');
            return;
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $userModel->create($username, $email, $hashedPassword, $date_of_birth);

        $_SESSION['success'] = "Account created successfully. You can now log in.";
        redirect('/login');
    }
}