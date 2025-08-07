<?php

    session_start();
    require_once('../../global/main_configuration.php');

    if(isset($_GET['scholarship'])){

        $item_id = $_GET['scholarship'];
        $user_id = $_SESSION['user_id'];
        $status = "Pending";

        $pdo = openDB();
        $sql = "SELECT * FROM applications 
        WHERE user_id = :user_id
        AND scholarship_id = :item_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'item_id' => $item_id,
            'user_id' => $user_id,
        ]);
        $rowCount = $stmt->rowCount();
        if($rowCount >0){
            $_SESSION['fail'] = "You've Already Applied!";
            header('location: ../public/saved-items');
        } else {
            $sql = "INSERT INTO applications (user_id, scholarship_id, status)
            VALUE (:user_id, :item_id, :status)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
            'item_id' => $item_id,
            'user_id' => $user_id,
            'status' => $status
            ]);

            if($stmt){
                $_SESSION['success'] = "We've Received Your Applications!";
                header('location: ../public/saved-items');
            } else {
                $_SESSION['fail'] = "Applications Failed To Be Send!";
                header('location: ../public/saved-items');
            }

        }
    }

?>