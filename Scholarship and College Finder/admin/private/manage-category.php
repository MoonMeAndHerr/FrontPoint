<?php

    session_start();
	require_once('../../global/main_configuration.php');

    if (isset($_POST['add'])) {

        $name = $_POST['name'] ?? '';

        // Validate inputs
        if (empty($name) ) {
            $error = "All fields are required.";
        } else {
            try {
                $pdo = openDB();
                $stmt = $pdo->prepare("INSERT INTO categories (name) VALUES (:name)");
                $stmt->execute([
                    ':name' => $name
                ]);
                $_SESSION['success'] = "Category added successfully.";
            } catch (PDOException $e) {
                $_SESSION['fail'] = "Error adding category: " . $e->getMessage();
            }
        }
        header('Location: ../public/list-category.php');
        exit();
        
    }

    if (isset($_POST['update'])) {

        $name = $_POST['name'] ?? '';
        $category_id = $_POST['category_id'] ?? '';

        // Validate inputs
        if (empty($name) || empty($category_id)) {
            $error = "All fields are required.";
        } else {
            try {
                $pdo = openDB();
                $stmt = $pdo->prepare("UPDATE categories SET name=:name WHERE category_id = :category_id");
                $stmt->execute([
                    ':name' => $name,
                    ':category_id' => $category_id
                ]);
                $_SESSION['success'] = "Category updated successfully.";
            } catch (PDOException $e) {
                $_SESSION['fail'] = "Error updating category: " . $e->getMessage();
            }
        }
        header('Location: ../public/list-category.php');
        exit();
        
    }

    if(isset($_GET['delete'])){

        $pdo = openDB();
        $stmt = $pdo->prepare("DELETE FROM categories WHERE category_id = :category_id");
        $stmt->execute(['category_id' => $_GET['delete']]);

        if($stmt){

            $_SESSION['success'] = "Successfully Deleted!";
            header('Location: ../public/list-category.php');

        } else {

            $_SESSION['fail'] = "Failed To Delete!";
            header('Location: ../public/list-category.php');

        }

    }









?>