<?php
require_once '../vendor/autoload.php';

include_once "../vendor/google/apiclient/examples/templates/base.php";

putenv("GOOGLE_APPLICATION_CREDENTIALS=gtm-website-sheets-service_account.json");

define('APPLICATION_NAME', 'Google Sheets API PHP Quickstart');
# define('CREDENTIALS_PATH', '~/.credentials/sheets.googleapis.com-php-quickstart.json');
//define('CLIENT_SECRET_PATH', __DIR__ . '/client_secret.json');
// If modifying these scopes, delete your previously saved credentials
// at ~/.credentials/sheets.googleapis.com-php-quickstart.json
define('SCOPES', implode(' ', array(
  Google_Service_Sheets::SPREADSHEETS_READONLY)
));

$client = new Google_Client();


if ($credentials_file = checkServiceAccountCredentialsFile()) {
  // set the location manually
  $client->setAuthConfig($credentials_file);
} elseif (getenv('GOOGLE_APPLICATION_CREDENTIALS')) {
  // use the application default credentials
  $client->useApplicationDefaultCredentials();
} else {
  echo missingServiceAccountDetailsWarning();
  return;
}



$client->setApplicationName(APPLICATION_NAME);
$client->setScopes(SCOPES);
#$client->setAuthConfig(CLIENT_SECRET_PATH);
$client->setAccessType('offline');


$gtm_service = new Google_Service_Sheets($client);

# https://docs.google.com/spreadsheets/d/1781aeU9YzhTNZSAZFchEP-XmMQ8NrTpISWx4TgksNj0/edit#gid=742162043
$gtm_spreadsheetId = '1781aeU9YzhTNZSAZFchEP-XmMQ8NrTpISWx4TgksNj0';

$gtm_range = 'GTM-IDs!B2:C';

$gtm_response = $gtm_service->spreadsheets_values->get($gtm_spreadsheetId, $gtm_range);

$gtm_values = $gtm_response->getValues();
print("<pre>Hola");
print_r($gtm_values );

// Buscamos el nombre del subdominio
$student_subdomain = array_shift((explode(".",$_SERVER['HTTP_HOST'])));

echo $student_subdomain;

// Buscamos el cófigo de GTM en la columna GTM Account ID en la que coincida la columna Subdomain con el student_subdomain
$key = array_search($student_subdomain, array_column($gtm_values, 1));
echo "KEY=>";
print($key);
echo "gtm_values=>";
print_r($gtm_values[$key][0]);

if ($gtm_values[$key][0] == '') {
  define('GTM_CODE', $gtm_values[$key][0]);
} else {
  define('GTM_CODE', "");
}

# define('GTM_CODE', $gtm_values[$key][0]);

echo $GTM_CODE;

?>