<?php
require 'vendor/autoload.php';

use XeroAPI\XeroPHP\XeroPHP;
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

$authorizationUrl = $provider->getAuthorizationUrl([
    'scope' => 'openid profile email accounting.transactions accounting.settings'
]);

$_SESSION['oauth2state'] = $provider->getState();
header('Location: ' . $authorizationUrl);
exit;
