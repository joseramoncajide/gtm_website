<?php
require_once '../vendor/autoload.php';

define('CLIENT_SECRET_PATH', __DIR__ . '/client_secret.json');

use Google\Spreadsheet\ServiceRequestFactory;
use Google\Spreadsheet\DefaultServiceRequest;

function getGoogleTokenFromKeyFile() {
    $client = new Google_Client();
   # $client->setAuthConfig( __DIR__ . 'client_secret.json' );
      $client->setAuthConfig(CLIENT_SECRET_PATH);
    $client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
    if ($client->isAccessTokenExpired()) {
        $client->refreshTokenWithAssertion();
    }

    return $client->getAccessToken();
}

$tokenArray = getGoogleTokenFromKeyFile();

$serviceRequest = new DefaultServiceRequest($tokenArray['access_token']);
ServiceRequestFactory::setInstance($serviceRequest);

$spreadsheetService = new Google\Spreadsheet\SpreadsheetService();
$spreadsheetFeed = $spreadsheetService->getSpreadsheetFeed();
$spreadsheet = $spreadsheetFeed->getByTitle('Title');
?>