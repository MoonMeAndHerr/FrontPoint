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

    $xeroResponse = $client->post('https://api.xero.com/api.xro/2.0/Contacts', [
        'headers' => [
            'Authorization' => 'Bearer ' . $access_token,
            'Xero-tenant-id' => $tenant_id,
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ],
        'json' => [[
            'Name' => $name,
            'Addresses' => [[
                'AddressType' => 'STREET',
                'AddressLine1' => $address
            ]],
            'Phones' => [[
                'PhoneType' => 'MOBILE',
                'PhoneNumber' => $phone
            ]],
            'ContactPersons' => [[
                'FirstName' => $name,
                'EmailAddress' => '',
                'IncludeInEmails' => false
            ]],
            'CompanyNumber' => $company,
            'ContactStatus' => 'ACTIVE'
        ]]
    ]);

    $result = json_decode($xeroResponse->getBody(), true);
    echo "Customer saved to database and Xero.<br>";
    echo "Xero ContactID: " . $result['Contacts'][0]['ContactID'];

} catch (Exception $e) {
    exit("Xero Error: " . $e->getMessage());
}
