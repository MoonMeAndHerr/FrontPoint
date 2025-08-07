<?php

    session_start();
	require_once('../../global/main_configuration.php');

    if (isset($_POST['add'])) {

        $title = $_POST['title'] ?? '';
        $description = $_POST['description'] ?? '';
        $eligibility = $_POST['eligibility'] ?? '';
        $deadline = $_POST['deadline'] ?? '';
        $location = $_POST['location'] ?? '';
        $category = $_POST['category'] ?? '';
        $created_by = $_SESSION['admin_id'] ?? '';
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $image_url = 'image_' . time() . '.' . $ext;

        $uploadDirLogo = '../../media/';

        // Validate inputs
        if (empty($title) || empty($description) || empty($eligibility) || empty($deadline) || empty($location) || empty($category) || empty($created_by)) {
            $error = "All fields are required.";
        } else {
            try {
                $pdo = openDB();
                $stmt = $pdo->prepare("INSERT INTO scholarships (title, description, image_url, eligibility, deadline, location_id, category_id, created_by) VALUES (:title, :description, :image_url, :eligibility, :deadline, :location_id, :category_id, :created_by)");
                $stmt->execute([
                    ':title' => $title,
                    ':description' => $description,
                    ':image_url' => $image_url,
                    ':eligibility' => $eligibility,
                    ':deadline' => $deadline,
                    ':location_id' => $location,
                    ':category_id' => $category,
                    ':created_by' => $created_by
                ]);

                move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirLogo . $image_url);

                $_SESSION['success'] = "Scholarship added successfully.";
            } catch (PDOException $e) {
                $_SESSION['fail'] = "Error adding Scholarship: " . $e->getMessage();
            }
        }
        header('Location: ../public/list-scholarship.php');
        exit();
        
    }

    if (isset($_POST['update'])) {

        $title = $_POST['title'] ?? '';
        $description = $_POST['description'] ?? '';
        $eligibility = $_POST['eligibility'] ?? '';
        $deadline = $_POST['deadline'] ?? '';
        $location = $_POST['location'] ?? '';
        $category = $_POST['category'] ?? '';
        $scholarship_id = $_POST['scholarship_id'] ?? '';

        $uploadDirLogo = '../../media/';

        // Validate inputs
        if (empty($title) || empty($description) || empty($eligibility) || empty($deadline) || empty($location) || empty($category) || empty($scholarship_id)) {
            $error = "All fields are required.";
        } else {
            try {
                $pdo = openDB();
                $stmt = $pdo->prepare("UPDATE scholarships SET title = :title, description = :description, eligibility = :eligibility, deadline = :deadline, location_id = :location_id, category_id = :category_id WHERE scholarship_id = :scholarship_id");
                $stmt->execute([
                    ':title' => $title,
                    ':description' => $description,
                    ':eligibility' => $eligibility,
                    ':deadline' => $deadline,
                    ':location_id' => $location,
                    ':category_id' => $category,
                    ':scholarship_id' => $scholarship_id
                ]);

                if (!empty($_FILES['image']['name'])) {

                    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                    $image_url = 'image_' . time() . '.' . $ext;
                    move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirLogo . $image_url);

                    $pdo = openDB();
                    $stmt = $pdo->prepare("UPDATE scholarships SET image_url = :image_url WHERE scholarship_id = :scholarship_id");
                    $stmt->execute([
                    ':image_url' => $image_url,
                    ':scholarship_id' => $scholarship_id
                ]);

                }

                $_SESSION['success'] = "Scholarship updated successfully.";
            } catch (PDOException $e) {
                $_SESSION['fail'] = "Error updating scholarship: " . $e->getMessage();
            }
        }
        header('Location: ../public/list-scholarship.php');
        exit();
        
    }

    if(isset($_GET['delete'])){

        $pdo = openDB();
        $stmt = $pdo->prepare("DELETE FROM scholarships WHERE scholarship_id = :scholarship_id");
        $stmt->execute(['scholarship_id' => $_GET['delete']]);

        if($stmt){

            $_SESSION['success'] = "Successfully Deleted!";
            header('Location: ../public/list-scholarship.php');

        } else {

            $_SESSION['fail'] = "Failed To Delete!";
            header('Location: ../public/list-scholarship.php');

        }

    }









?>