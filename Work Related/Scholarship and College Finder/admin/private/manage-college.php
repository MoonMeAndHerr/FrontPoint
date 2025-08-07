<?php

    session_start();
	require_once('../../global/main_configuration.php');

    if (isset($_POST['add'])) {

        $name = $_POST['name'] ?? '';
        $description = $_POST['description'] ?? '';
        $location = $_POST['location'] ?? '';
        $website = $_POST['website'] ?? '';
        $created_by = $_SESSION['admin_id'] ?? '';
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $image_url = 'image_' . time() . '.' . $ext;

        $uploadDirLogo = '../../media/';

        // Validate inputs
        if (empty($name) || empty($description) || empty($location) || empty($website)) {
            $error = "All fields are required.";
        } else {
            try {
                $pdo = openDB();
                $stmt = $pdo->prepare("INSERT INTO colleges (name, description, image_url, location_id, website, created_by) VALUES (:name, :description, :image_url, :location_id, :website, :created_by)");
                $stmt->execute([
                    ':name' => $name,
                    ':description' => $description,
                    ':image_url' => $image_url,
                    ':location_id' => $location,
                    ':website' => $website,
                    ':created_by' => $created_by
                ]);

                    move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirLogo . $image_url);

                $_SESSION['success'] = "College added successfully.";
            } catch (PDOException $e) {
                $_SESSION['fail'] = "Error college admin: " . $e->getMessage();
            }
        }
        header('Location: ../public/list-college.php');
        exit();
        
    }

    if (isset($_POST['update'])) {

        $name = $_POST['name'] ?? '';
        $description = $_POST['description'] ?? '';
        $location = $_POST['location'] ?? '';
        $website = $_POST['website'] ?? '';
        $college_id = $_POST['college_id'] ?? '';

        $uploadDirLogo = '../../media/';

        // Validate inputs
        if (empty($name) || empty($description) || empty($location) || empty($website) || empty($college_id)) {
            $error = "All fields are required.";
        } else {
            try {
                $pdo = openDB();
                $stmt = $pdo->prepare("UPDATE colleges SET name=:name, description=:description, location_id=:location, website=:website WHERE college_id = :college_id");
                $stmt->execute([
                    ':name' => $name,
                    ':description' => $description,
                    ':location' => $location,
                    ':website' => $website,
                    ':college_id' => $college_id
                ]);

                if (!empty($_FILES['image']['name'])) {

                    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                    $image_url = 'image_' . time() . '.' . $ext;
                    move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirLogo . $image_url);

                    $pdo = openDB();
                    $stmt = $pdo->prepare("UPDATE colleges SET image_url = :image_url WHERE college_id = :college_id");
                    $stmt->execute([
                    ':image_url' => $image_url,
                    ':college_id' => $college_id
                ]);

                }

                $_SESSION['success'] = "College updated successfully.";
            } catch (PDOException $e) {
                $_SESSION['fail'] = "Error updating college: " . $e->getMessage();
            }
        }
        header('Location: ../public/list-college.php');
        exit();
        
    }

    if(isset($_GET['delete'])){

        $pdo = openDB();
        $stmt = $pdo->prepare("DELETE FROM colleges WHERE college_id = :college_id");
        $stmt->execute(['college_id' => $_GET['delete']]);

        if($stmt){

            $_SESSION['success'] = "Successfully Deleted!";
            header('Location: ../public/list-college.php');

        } else {

            $_SESSION['fail'] = "Failed To Delete!";
            header('Location: ../public/list-college.php');

        }

    }









?>