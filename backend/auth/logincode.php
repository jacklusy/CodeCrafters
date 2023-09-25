<?php
session_start();
include('../../include/config.php');
include('../../include/function.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['LoginBtn'])) {

    if (!empty(trim($_POST['email'])) && !empty(trim($_POST['password']))) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE email = :email LIMIT 1";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        if ($stmt->execute()) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row && password_verify($password, $row['password'])) {
                if ($row['verify_status'] == "1") {
                    
                    $_SESSION['authenticated'] = true;
                    $_SESSION['verify_token'] = $row['verify_token'];

                    $_SESSION['auth_student'] = [
                        'full_name' => $row['full_name'],
                        'date_of_birth' => $row['date_of_birth'],
                        'gender' => $row['gender'],
                        'phone' => $row['phone'],
                        'email' => $row['email'],
                    ];

                    $_SESSION['status'] = "You are logged in successfully.";
                    header("Location: ../pages/dashboard.php");
                    exit(0);

                } else {
                    $_SESSION['status'] = "Please verify your email address to login.";
                    header("Location: login.php");
                    exit(0);
                }
            } else {
                $_SESSION['status'] = "Invalid email or password.";
                header("Location: login.php");
                exit(0);
            }
        } else {
            $_SESSION['status'] = "An error occurred while executing the query.";
            header("Location: login.php");
            exit(0);
        }
    } else {
        $_SESSION['status'] = "All fields are mandatory.";
        header("Location: login.php");
        exit(0);
    }
}
