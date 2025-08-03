<?php

    session_start();
	require_once('../../global/main_configuration.php');

    if (isset($_POST['add'])) {

        $state = $_POST['state'] ?? '';
        $city = $_POST['city'] ?? '';

        // Validate inputs
        if (empty($state)|| empty($city)) {
            $error = "All fields are required.";
        } else {
            try {
                $pdo = openDB();
                $stmt = $pdo->prepare("INSERT INTO locations (state, city) VALUES (:state, :city)");
                $stmt->execute([
                    ':state' => $state,
                    ':city' => $city
                ]);
                $_SESSION['success'] = "Location added successfully.";
            } catch (PDOException $e) {
                $_SESSION['fail'] = "Error adding location: " . $e->getMessage();
            }
        }
        header('Location: ../public/list-location.php');
        exit();
        
    }

    if (isset($_POST['update'])) {

        $state = $_POST['state'] ?? '';
        $city = $_POST['city'] ?? '';
        $location_id = $_POST['location_id'] ?? '';

        // Validate inputs
        if (empty($state) || empty($city) || empty($location_id)) {
            $error = "All fields are required.";
        } else {
            try {
                $pdo = openDB();
                $stmt = $pdo->prepare("UPDATE locations SET state=:state, city=:city WHERE location_id = :location_id");
                $stmt->execute([
                    ':state' => $state,
                    ':city' => $city,
                    ':location_id' => $location_id
                ]);
                $_SESSION['success'] = "Location updated successfully.";
            } catch (PDOException $e) {
                $_SESSION['fail'] = "Error updating location: " . $e->getMessage();
            }
        }
        header('Location: ../public/list-location.php');
        exit();
        
    }

    if(isset($_GET['delete'])){

        $pdo = openDB();
        $stmt = $pdo->prepare("DELETE FROM locations WHERE location_id = :location_id");
        $stmt->execute(['location_id' => $_GET['delete']]);

        if($stmt){

            $_SESSION['success'] = "Successfully Deleted!";
            header('Location: ../public/list-location.php');

        } else {

            $_SESSION['fail'] = "Failed To Delete!";
            header('Location: ../public/list-location.php');

        }

    }









?>