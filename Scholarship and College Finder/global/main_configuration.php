<?php

#======================= Database Configuration Starts =======================#

function openDB() {
    $host = 'localhost';
    $dbname = 'college_finder';
    $username = 'root';
    $password = '';
    $charset = 'utf8mb4';

    #$host = 'localhost';#
    #$dbname = 'beranstrading';#
    #$username = 'root';#
    #$password = '';#
    #$charset = 'utf8mb4';#

    #$host = 'localhost';#
    #$dbname = 'beranstr_beranstrading';#
    #$username = 'beranstr_beransuser';#
    #$password = 'beranspassword';#
    #$charset = 'utf8mb4';#

    $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

    try {
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        return new PDO($dsn, $username, $password, $options);
    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }
}

function closeDB(&$pdo) {
    $pdo = null;
}

#======================= Database Configuration Ends =======================#

#======================= Site Identity Configuration Starts =======================#

$pdo = openDB();

$sql = "SELECT * 
FROM `site_identity` 
WHERE `identity_id` = 1";
$stmt = $pdo->query($sql);

while ($row = $stmt->fetch()) {

    $website_name = $row['site_name'];
    $website_logo = $row['logo'];
    $website_favicon = $row['favicon'];
    $description = $row['description'];

}

closeDB($pdo);

#======================= Site Identity Configuration Ends =======================#

#======================= Global Variable Configuration Starts =======================#

define('BASE_DIR', dirname(__DIR__)); # Define the base directory of the project
define('WEB_NAME', $website_name); # Define the website name
define('WEB_LOGO', $website_logo); # Define the website logo
define('WEB_FAVICON', $website_favicon); # Define the website favicon
define('WEB_DESC', $description); # Define the website descrip


#======================= Global Variable Configuration Ends =======================#



?>
