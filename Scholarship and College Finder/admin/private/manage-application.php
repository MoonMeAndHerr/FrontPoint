<?php

    session_start();
	require_once('../../global/main_configuration.php');

    if (isset($_GET['rejected'])) {

        $pdo = openDB();
        $sql = "UPDATE applications SET status='Rejected' WHERE application_id = :application_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['application_id' => $_GET['rejected']]);

        if($stmt){

            $_SESSION['success'] = "Successfully Updated!"; 

        } else {

            $_SESSION['fail'] = "Fail To Update!";

        }

        header('Location: ../public/list-application.php');

    }

    if (isset($_POST['accepted'])) {

        $pdo = openDB();
        $sql = "UPDATE applications SET status='Accepted' WHERE application_id = :application_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['application_id' => $_GET['accepted']]);

        if($stmt){

            $_SESSION['success'] = "Successfully Updated!"; 

        } else {

            $_SESSION['fail'] = "Fail To Update!";

        }

        header('Location: ../public/list-application.php');



    }









?>