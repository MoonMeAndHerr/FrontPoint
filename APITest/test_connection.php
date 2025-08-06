<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

session_start();

$access_token = $_SESSION['access_token'] ?? '';

// Replace with your actual tenant ID — get it from API below
$tenant_id = '26d074dc-81b8-4796-9709-6a79846b9532';

if (!$access_token || !$tenant_id) {
    exit('Token or tenant ID missing.');
}

$client = new Client([
    'base_uri' => 'https://api.xero.com/',
    'headers' => [
        'Authorization' => 'Bearer ' . $access_token,
        'Xero-tenant-id' => $tenant_id,
        'Accept' => 'application/json',
    ]
]);

$response = $client->get('api.xro/2.0/Organisations');
$data = json_decode($response->getBody()->getContents(), true);

echo '<pre>';
print_r($data);
