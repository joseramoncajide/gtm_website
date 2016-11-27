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

echo "<pre>";
echo 'Hola '.($_COOKIE['logged_user']!='' ? $_COOKIE['logged_user'] : 'Test'); 


if ($_COOKIE['logged_user'] != '') {

	$service = new Google_Service_Sheets($client);

	$spreadsheetId = '15nUuNGh1SX3gEEK41VGc1vJqSQQaEXdo3tIcFr5aefU';
	$range = 'CRM!A2:H';
	$response = $service->spreadsheets_values->get($spreadsheetId, $range);
	$values = $response->getValues();
	print("<pre>VALUES:");
	//print_r($values );
	
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
	

	
	


/*	
	$d1 = new DateTime('2011-03-12');
echo $d2 = new DateTime(date('d-m-Y H:i:s'));

$diff = $d2->diff($d1);

echo $diff->y;
	*/
	//ok 
	//echo date("d-m-Y ", $new_Date);

	//$new_date = date('m-Y', strtotime($values[$key][0]));  
	//echo $new_date;
	define('USER_ID', md5($values[$key][2]));
	define('USER_COHORT', date('m-Y', $new_Date));
	define('USER_NAME', ucfirst(strtolower($values[$key][1])));
	define('USER_LOGIN', $values[$key][2]);
	define('USER_LAST_ACCESS', date('d-m-Y H:i:s'));
	define('USER_LAST_ACCESS', date('d-m-Y H:i:s'));
	define('USER_AGE', $user_age);
	




	

}



/*
if (count($values) == 0) {
  print "No data found.\n";
} else {
  print "Name, Major:\n";
  foreach ($values as $row) {
    // Print columns A and E, which correspond to indices 0 and 4.
    printf("%s, %s, %s\n", $row[0], $row[1], $row[2]);
  }
}
*/




#echo "sdsd->".$key = array_search('Noa', array_column($values, 1));

#$keys = array_keys(array_column($values, '0'), 0);
#print_r($values[$key]);
#var_dump(array_search('0', array_keys($values)));

/*
echo "<hr><h2>Código de GTM</h2>";


$gtm_service = new Google_Service_Sheets($client);

$gtm_spreadsheetId = '1781aeU9YzhTNZSAZFchEP-XmMQ8NrTpISWx4TgksNj0';

$gtm_range = 'GTM-IDs!B2:C';

$gtm_response = $gtm_service->spreadsheets_values->get($gtm_spreadsheetId, $gtm_range);

$gtm_values = $gtm_response->getValues();
#print("<pre>Hola");
#print_r($gtm_values );

// Buscamos el nombre del subdominio
$student_subdomain = array_shift((explode(".",$_SERVER['HTTP_HOST'])));

// Buscamos el cófigo de GTM en la columna GTM Account ID en la que coincida la columna Subdomain con el student_subdomain
$key = array_search($student_subdomain, array_column($gtm_values, 1));
#print_r($gtm_values[$key][0]);

define('GTM_CODE', $gtm_values[$key][0]);
*/
?>

	dataLayer.push({
		'userId' : '<?php echo USER_ID;?>', 
		'user_cohort' : '<?php echo USER_COHORT;?>',
		'user_name': '<?php echo USER_NAME;?>',
		'user_login': '<?php echo USER_LOGIN;?>',
		'user_age': '<?php echo USER_AGE;?>',
		'user_last_login': '<?php echo USER_LAST_ACCESS;?>',
		'pageTemplate': 'landingPage',
		'contentGroup1': 'Landings'
	});