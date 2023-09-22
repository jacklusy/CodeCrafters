<?php
session_start();
include('../../include/config.php');
include('../../include/function.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['LoginBtn'])) {

    if (!empty(trim($_POST['email'])) && !empty(trim($_POST['password']))) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM student WHERE email = :email AND password = :password LIMIT 1";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        
        if ($stmt->execute()) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row['verify_status'] == "1") 
            {
                $_SESSION['authenticated'] = TRUE;
                $_SESSION['auth_student'] = [
                    'full_name' => $row['full_name'],
                    'date_of_birth' => $row['date_of_birth'],
                    'gender' => $row['gender'],
                    'phone' => $row['phone'],
                    'email' => $row['email'],
                ];

                $_SESSION['status'] = "Your Logged In Seccessfully.";
                header("Location: ../pages/dashboard.php");
                exit(0);
 
            } else {
                $_SESSION['status'] = "Please Verify Your Email Address To Login.";
                header("Location: login.php");
                exit(0);
            }
        } else {
            $_SESSION['status'] = "All Fields Are Mandetory.";
            header("Location: login.php");
            exit(0);
        }
    } else {
        $_SESSION['status'] = "All Fields Are Mandetory.";
        header("Location: login.php");
        exit(0);
    }
}
