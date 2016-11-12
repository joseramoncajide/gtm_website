<?php
require_once '../vendor/autoload.php';



use Google\Spreadsheet\ServiceRequestFactory;
use Google\Spreadsheet\DefaultServiceRequest;

function getGoogleTokenFromKeyFile() {
    $client = new Google_Client();
    $client->setAuthConfig( __DIR__ . 'client_secret.json' );
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