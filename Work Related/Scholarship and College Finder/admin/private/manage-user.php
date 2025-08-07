<?php

    session_start();
	require_once('../../global/main_configuration.php');

    if (isset($_POST['add'])) {

        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        // Validate inputs
        if (empty($name) || empty($email) || empty($password) ) {
            $error = "All fields are required.";
        } else {
            try {
                $pdo = openDB();
                $stmt = $pdo->prepare("INSERT INTO users (full_name, email, password) VALUES (:name, :email, :password)");
                $stmt->execute([
                    ':name' => $name,
                    ':email' => $email,
                    ':password' => $password
                ]);
                $_SESSION['success'] = "User added successfully.";
            } catch (PDOException $e) {
                $_SESSION['fail'] = "Error adding user: " . $e->getMessage();
            }
        }
        header('Location: ../public/list-user.php');
        exit();
        
    }

    if (isset($_POST['update'])) {

        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $user_id = $_POST['user_id'] ?? '';

        // Validate inputs
        if (empty($name) || empty($email) || empty($password) || empty($user_id)) {
            $error = "All fields are required.";
        } else {
            try {
                $pdo = openDB();
                $stmt = $pdo->prepare("UPDATE users SET full_name=:name, email=:email, password=:password WHERE user_id = :user_id");
                $stmt->execute([
                    ':name' => $name,
                    ':email' => $email,
                    ':password' => $password,
                    ':user_id' => $user_id
                ]);
                $_SESSION['success'] = "User updated successfully.";
            } catch (PDOException $e) {
                $_SESSION['fail'] = "Error updating user: " . $e->getMessage();
            }
        }
        header('Location: ../public/list-user.php');
        exit();
        
    }

    if(isset($_GET['delete'])){

        $pdo = openDB();
        $stmt = $pdo->prepare("DELETE FROM users WHERE user_id = :user_id");
        $stmt->execute(['user_id' => $_GET['delete']]);

        if($stmt){

            $_SESSION['success'] = "Successfully Deleted!";
            header('Location: ../public/list-user.php');

        } else {

            $_SESSION['fail'] = "Failed To Delete!";
            header('Location: ../public/list-user.php');

        }

    }









?>