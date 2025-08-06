<?php
require 'vendor/autoload.php'; // Guzzle
session_start();

use GuzzleHttp\Client;

// === CONFIG ===
$host = 'localhost';
$dbname = 'beranstrading';
$user = 'root';
$pass = '';

$access_token = $_SESSION['access_token'] ?? null;
$tenant_id    = $_SESSION['tenant_id'] ?? null;

if (!$access_token || !$tenant_id) {
    exit("Please connect to Xero first.");
}

// === GET POST DATA ===
$name     = $_POST['name'];
$phone    = $_POST['phone'];
$address  = $_POST['address'];
$company  = $_POST['company'];
$position = $_POST['position'];

// === SAVE TO DATABASE ===
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("INSERT INTO customer (customer_name, customer_phone, customer_address, customer_company_name, customer_designation) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$name, $phone, $address, $company, $position]);
} catch (PDOException $e) {
    exit("❌ DB Error: " . $e->getMessage());
}

// === SAVE TO XERO ===
try {
    $client = new Client();
    $response = $client->post('https://api.xero.com/api.xro/2.0/Contacts', [
        'headers' => [
            'Authorization'   => 'Bearer ' . $_SESSION['access_token'],
            'Accept'          => 'application/json',
            'Content-Type'    => 'application/json',
            'Xero-tenant-id'  => $_SESSION['tenant_id'],
        ],
        'json' => [
            'Name'       => $name,
            'FirstName'  => $name,
            'Phones' => [
                [
                    'PhoneType'    => 'MOBILE',
                    'PhoneNumber'  => $phone
                ]
            ],
            'Addresses' => [
                [
                    'AddressType'   => 'STREET',
                    'AddressLine1'  => $address,
                    'City'          => 'Kuala Lumpur',
                    'Region'        => 'WP',
                    'PostalCode'    => '50000',
                    'Country'       => 'Malaysia'
                ]
            ]
            // No EmailAddress or ContactPersons
        ]
    ]);

    echo "✅ Contact created: " . $response->getBody();
} catch (\GuzzleHttp\Exception\ClientException $e) {
    $responseBody = $e->getResponse()->getBody()->getContents();
    echo "❌ Xero Error: " . $responseBody;
}

