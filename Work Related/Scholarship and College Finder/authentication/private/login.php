<?php

    session_start();
    require_once('../../global/main_configuration.php');

    if(isset($_POST['loginuser'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $pdo = openDB();
        $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'email' => $email,
            'password' => $password
        ]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $rowCount = $stmt->rowCount(); 

        if($rowCount > 0){
            $_SESSION['user_id'] = $row['user_id'];
            header('location: ../../user/');
        } else {
            $_SESSION['fail'] = "Your Password and Email Does Not Match!";
            header('location: ../public/index?user');
        }
    }

    if(isset($_POST['loginadmin'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $pdo = openDB();
        $sql = "SELECT * FROM admins WHERE email = :email AND password = :password";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'email' => $email,
            'password' => $password
        ]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $rowCount = $stmt->rowCount(); 

        if($rowCount > 0){
            $_SESSION['admin_id'] = $row['admin_id'];
            header('location: ../../admin/');
        } else {
            $_SESSION['fail'] = "Your Password and Email Does Not Match!";
            header('location: ../public/index?admin');
        }
    }

?>