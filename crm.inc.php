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


if ($_COOKIE['logged_user'] != '') {

	$service = new Google_Service_Sheets($client);

	$spreadsheetId = '15nUuNGh1SX3gEEK41VGc1vJqSQQaEXdo3tIcFr5aefU';
	$range = 'CRM!A2:H';
	$response = $service->spreadsheets_values->get($spreadsheetId, $range);
	$values = $response->getValues();
	print("<pre>VALUES:");
	print_r($values );
	
	$key = array_search($_COOKIE['logged_user'], array_column($values, 2));
	
	print_r($values[$key]);
	

	
	//Last login
	$new_Date =  DateTime::createFromFormat('d/m/Y H:i:s', $values[$key][0])->getTimestamp();
	
	//User age
	$birth_Date =  DateTime::createFromFormat('d/m/Y', $values[$key][6])->getTimestamp();
	
	$date_1 = date('Y-m-d', $birth_Date);
	$date_2 =  date( 'Y-m-d' );
	$interval = date_diff($date_1, $date_2);
	
	$datetime1 = date_create($date_1 );
	$datetime2 = date_create($date_2);
	$user_age = date_diff($datetime1, $datetime2);
	$user_age = $user_age->format('%y');
	
	if ($user_age < 18) {
		$bin = "Teenager";
	} elseif ($user_age > 19  && $user_age < 22) {
		$bin = " Young Adult";
	} elseif ($user_age > 22  && $user_age < 30) {
		$bin = "Adult";		
	} elseif ($user_age > 30  && $user_age < 45) {
		$bin = "Young Middle-Aged Adult";	
	} elseif ($user_age > 46  && $user_age < 49) {
		$bin = "Middle-Aged Adult";			
	} elseif ($user_age > 50 && $user_age < 65) {
		$bin = "Middle-Aged Adult";
	} else {
		$bin = "Senior Citizen";
	}
	
	define('USER_ID', md5($values[$key][2]));
	define('USER_COHORT', date('m-Y', $new_Date));
	define('USER_NAME', ucfirst(strtolower($values[$key][1])));
	define('USER_LOGIN', $values[$key][2]);
	define('USER_LAST_ACCESS', date('d-m-Y H:i:s'));
	define('USER_LAST_ACCESS', date('d-m-Y H:i:s'));
	define('USER_AGE', $user_age);
	define('USER_BIN', $bin);

} else {

	define('USER_ID', '');
	define('USER_COHORT', '');
	define('USER_NAME', '');
	define('USER_LOGIN', '');
	define('USER_LAST_ACCESS', '');
	define('USER_LAST_ACCESS', '');
	define('USER_AGE', '');
	define('USER_BIN', '');

}

?>