<?php
require 'vendor/autoload.php';

use League\OAuth2\Client\Provider\GenericProvider;

session_start();

$provider = new GenericProvider([
    'clientId'                => '592BE780EB644ECBB44DA2507798EF3F',
    'clientSecret'            => 'oQEnvI18Y-LUBX2zXmi-Q_5lfzDet0Efiw5mKiBEcudHy2MN',
    'redirectUri'             => 'http://localhost/APITest/callback.php',
    'urlAuthorize'            => 'https://login.xero.com/identity/connect/authorize',
    'urlAccessToken'          => 'https://identity.xero.com/connect/token',
    'urlResourceOwnerDetails' => 'https://api.xero.com/api.xro/2.0/Organisation'
]);

if (!isset($_GET['code'])) {
    exit('No code in URL');
}

try {
    $accessToken = $provider->getAccessToken('authorization_code', [
        'code' => $_GET['code']
    ]);

    // Save these tokens in DB or session
    $_SESSION['access_token'] = $accessToken->getToken();
    $_SESSION['refresh_token'] = $accessToken->getRefreshToken();
    $_SESSION['expires'] = $accessToken->getExpires();

    echo "Connected to Xero!";
} catch (\Exception $e) {
    echo "Failed to get access token: " . $e->getMessage();
}
