<?php

    session_start();
    require_once('../../global/main_configuration.php');
    
    if(isset($_GET['college'])){

        $item_id = $_GET['college'];
        $user_id = $_SESSION['user_id'];
        $item_type = "college";

        $pdo = openDB();
        $sql = "SELECT * FROM saved_items 
        WHERE user_id = :user_id
        AND item_id = :item_id
        AND item_type = :item_type";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'item_id' => $item_id,
            'user_id' => $user_id,
            'item_type' => $item_type
        ]);
        $rowCount = $stmt->rowCount();

        if($rowCount >0){
            $_SESSION['fail'] = "Item Already In Your Saved Items!";
            header('location: ../public/saved-items');
        } else {
            $sql = "INSERT INTO saved_items (user_id, item_type, item_id)
            VALUE (:user_id, :item_type, :item_id)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
            'item_id' => $item_id,
            'item_type' => $item_type,
            'user_id' => $user_id
            ]);

            if($stmt){
                $_SESSION['success'] = "Items Successfully Added!";
                header('location: ../public/saved-items');
            } else {
                $_SESSION['fail'] = "Items Fail To Add!";
                header('location: ../public/saved-items');
            }

        }

    }

    if(isset($_GET['scholarship'])){

        $item_id = $_GET['scholarship'];
        $user_id = $_SESSION['user_id'];
        $item_type = "scholarship";

        $pdo = openDB();
        $sql = "SELECT * FROM saved_items 
        WHERE user_id = :user_id
        AND item_id = :item_id
        AND item_type = :item_type";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'item_id' => $item_id,
            'user_id' => $user_id,
            'item_type' => $item_type
        ]);
        $rowCount = $stmt->rowCount();

        if($rowCount >0){
            $_SESSION['fail'] = "Item Already In Your Saved Items!";
            header('location: ../public/saved-items');
        } else {
            $sql = "INSERT INTO saved_items (user_id, item_type, item_id)
            VALUE (:user_id, :item_type, :item_id)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
            'item_id' => $item_id,
            'item_type' => $item_type,
            'user_id' => $user_id
            ]);

            if($stmt){
                $_SESSION['success'] = "Items Successfully Added!";
                header('location: ../public/saved-items');
            } else {
                $_SESSION['fail'] = "Items Fail To Add!";
                header('location: ../public/saved-items');
            }

        }

    }

    if(isset($_GET['delete'])){

        $id = $_GET['delete'];
        $pdo = openDB();
        $sql = "DELETE FROM saved_items WHERE saved_id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'id' => $id
        ]);

        if($stmt){
            $_SESSION['success'] = "Items Successfully Deleted!";
            header('location: ../public/saved-items');
        } else {
            $_SESSION['fail'] = "Items Fail To Be Deleted!";
            header('location: ../public/saved-items');
        }

    }

?>