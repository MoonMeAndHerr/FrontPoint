<?php

    session_start();
	require_once('../../global/main_configuration.php');


    if (isset($_POST['update'])) {

        $sitename = $_POST['sitename'] ?? '';
        $sitedesc = $_POST['sitedesc'] ?? '';

        $uploadDirLogo = '../../siteidentity/logo/';
        $uploadDirFavicon = '../../siteidentity/favicon/';

    if (!empty($_FILES['sitelogo']['name'])) {
        $ext = pathinfo($_FILES['sitelogo']['name'], PATHINFO_EXTENSION);
        $logo_name = 'logo_' . time() . '.' . $ext;
        move_uploaded_file($_FILES['sitelogo']['tmp_name'], $uploadDirLogo . $logo_name);

        $pdo = openDB();
        $stmt = $pdo->prepare("UPDATE site_identity SET logo = :logoname WHERE identity_id = '1'");
        $stmt->bindParam(':logoname', $logo_name);
        $stmt->execute();

    }

    if (!empty($_FILES['sitefavicon']['name'])) {
        $ext = pathinfo($_FILES['sitefavicon']['name'], PATHINFO_EXTENSION);
        $favicon_name = 'favicon_' . time() . '.' . $ext;
        move_uploaded_file($_FILES['sitefavicon']['tmp_name'], $uploadDirFavicon . $favicon_name);

        $pdo = openDB();
        $stmt = $pdo->prepare("UPDATE site_identity SET favicon = :faviconname WHERE identity_id = '1'");
        $stmt->bindParam(':faviconname', $favicon_name);
        $stmt->execute();

    }

        $pdo = openDB();
        $result = $pdo->prepare("UPDATE site_identity SET site_name = :sitename, description = :sitedesc WHERE identity_id = '1'");
        $result->bindParam(':sitename', $sitename);
        $result->bindParam(':sitedesc', $sitedesc);
        $result->execute();

        if ($result) {
            $_SESSION['success'] = "Site identity updated successfully.";
        } else {
            $_SESSION['error'] = "Failed to update site identity.";
        }

        header('Location: ../public/siteidentity.php');
        exit();
        
    }









?>