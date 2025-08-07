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
                $stmt = $pdo->prepare("INSERT INTO admins (name, email, password) VALUES (:name, :email, :password)");
                $stmt->execute([
                    ':name' => $name,
                    ':email' => $email,
                    ':password' => $password
                ]);
                $_SESSION['success'] = "Admin added successfully.";
            } catch (PDOException $e) {
                $_SESSION['fail'] = "Error adding admin: " . $e->getMessage();
            }
        }
        header('Location: ../public/list-admin.php');
        exit();
        
    }

    if (isset($_POST['update'])) {

        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $admin_id = $_POST['admin_id'] ?? '';

        // Validate inputs
        if (empty($name) || empty($email) || empty($password) || empty($admin_id)) {
            $error = "All fields are required.";
        } else {
            try {
                $pdo = openDB();
                $stmt = $pdo->prepare("UPDATE admins SET name=:name, email=:email, password=:password WHERE admin_id = :admin_id");
                $stmt->execute([
                    ':name' => $name,
                    ':email' => $email,
                    ':password' => $password,
                    ':admin_id' => $admin_id
                ]);
                $_SESSION['success'] = "Admin updated successfully.";
            } catch (PDOException $e) {
                $_SESSION['fail'] = "Error updating admin: " . $e->getMessage();
            }
        }
        header('Location: ../public/list-admin.php');
        exit();
        
    }

    if(isset($_GET['delete'])){

        $pdo = openDB();
        $stmt = $pdo->prepare("DELETE FROM admins WHERE admin_id = :admin_id");
        $stmt->execute(['admin_id' => $_GET['delete']]);

        if($stmt){

            $_SESSION['success'] = "Successfully Deleted!";
            header('Location: ../public/list-admin.php');

        } else {

            $_SESSION['fail'] = "Failed To Delete!";
            header('Location: ../public/list-admin.php');

        }

    }









?>