<?php

    session_start();
    require_once('../../global/main_configuration.php');

    if(isset($_POST['regUser'])){

        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $name = $_POST['name'];

        $pdo = openDB();
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'email' => $email,
        ]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $rowCount = $stmt->rowCount(); 

        if($rowCount > 0){
            $_SESSION['fail'] = "Email Already In Used!";
            header('location: ../public/signup');
        } elseif($password != $repassword) {
            $_SESSION['fail'] = "Your Password and Retype Password Does Not Match!";
            header('location: ../public/signup');
        } else {

            $sql = "INSERT INTO users (full_name, email, password) VALUES (:full_name, :email, :password)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':full_name' => $name,
                ':email' => $email,
                ':password' => $password,
            ]);

            $_SESSION['success'] = "Account Created! Please Log In";
            header('location: ../public/');

        }
    }


?>