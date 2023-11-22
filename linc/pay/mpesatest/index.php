<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include('./PortalSDK/api.php');

$config1=[
    "host_address"=>"openapi.m-pesa.com",
    "api_key"=> "34kAqg96JPqFcXG69bQSLkxzusXfCjUH",
    "public_key"=> "MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEArv9yxA69XQKBo24BaF/D+fvlqmGdYjqLQ5WtNBb5tquqGvAvG3WMFETVUSow/LizQalxj2ElMVrUmzu5mGGkxK08bWEXF7a1DEvtVJs6nppIlFJc2SnrU14AOrIrB28ogm58JjAl5BOQawOXD5dfSk7MaAA82pVHoIqEu0FxA8BOKU+RGTihRU+ptw1j4bsAJYiPbSX6i71gfPvwHPYamM0bfI4CmlsUUR3KvCG24rB6FNPcRBhM3jDuv8ae2kC33w9hEq8qNB55uw51vK7hyXoAa+U7IqP1y6nBdlN25gkxEA8yrsl1678cspeXr+3ciRyqoRgj9RD/ONbJhhxFvt1cLBh+qwK2eqISfBb06eRnNeC71oBokDm3zyCnkOtMDGl7IvnMfZfEPFCfg5QgJVk1msPpRvQxmEsrX9MQRyFVzgy2CWNIb7c+jPapyrNwoUbANlN8adU1m6yOuoX7F49x+OjiG2se0EJ6nafeKUXw/+hiJZvELUYgzKUtMAZVTNZfT8jjb58j8GVtuS+6TM2AutbejaCV84ZK58E2CRJqhmjQibEUO6KPdD7oTlEkFy52Y1uOOBXgYpqMzufNPmfdqqqSM4dU70PO8ogyKGiLAIxCetMjjm6FCMEA3Kc8K0Ig7/XtFm9By6VxTJK1Mg36TlHaZKP6VzVLXMtesJECAwEAAQ==",
];

$config2=[
    "host_address"=>"uat.openapi.m-pesa.com",
    "api_key"=> "KNQZi0LcEsF9vlINJ83lhJhzhe2PzbD4",
    "public_key"=> "MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAszE+xAKVB9HRarr6/uHYYAX/RdD6KGVIGlHv98QKDIH26ldYJQ7zOuo9qEscO0M1psSPe/67AWYLEXh13fbtcSKGP6WFjT9OY6uV5ykw9508x1sW8UQ4ZhTRNrlNsKizE/glkBfcF2lwDXJGQennwgickWz7VN+AP/1c4DnMDfcl8iVIDlsbudFoXQh5aLCYl+XOMt/vls5a479PLMkPcZPOgMTCYTCE6ReX3KD2aGQ62uiu2T4mK+7Z6yvKvhPRF2fTKI+zOFWly//IYlyB+sde42cIU/588msUmgr3G9FYyN2vKPVy/MhIZpiFyVc3vuAAJ/mzue5p/G329wzgcz0ztyluMNAGUL9A4ZiFcKOebT6y6IgIMBeEkTwyhsxRHMFXlQRgTAufaO5hiR/usBMkoazJ6XrGJB8UadjH2m2+kdJIieI4FbjzCiDWKmuM58rllNWdBZK0XVHNsxmBy7yhYw3aAIhFS0fNEuSmKTfFpJFMBzIQYbdTgI28rZPAxVEDdRaypUqBMCq4OstCxgGvR3Dy1eJDjlkuiWK9Y9RGKF8HOI5a4ruHyLheddZxsUihziPF9jKTknsTZtF99eKTIjhV7qfTzxXq+8GGoCEABIyu26LZuL8X12bFqtwLAcjfjoB7HlRHtPszv6PJ0482ofWmeH0BE8om7VrSGxsCAwEAAQ==",
];

$config3=[
    "host_address"=>"openapi.m-pesa.com",
    "api_key"=> "34kAqg96JPqFcXG69bQSLkxzusXfCjUH",
    "public_key"=> "MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEArv9yxA69XQKBo24BaF/D+fvlqmGdYjqLQ5WtNBb5tquqGvAvG3WMFETVUSow/LizQalxj2ElMVrUmzu5mGGkxK08bWEXF7a1DEvtVJs6nppIlFJc2SnrU14AOrIrB28ogm58JjAl5BOQawOXD5dfSk7MaAA82pVHoIqEu0FxA8BOKU+RGTihRU+ptw1j4bsAJYiPbSX6i71gfPvwHPYamM0bfI4CmlsUUR3KvCG24rB6FNPcRBhM3jDuv8ae2kC33w9hEq8qNB55uw51vK7hyXoAa+U7IqP1y6nBdlN25gkxEA8yrsl1678cspeXr+3ciRyqoRgj9RD/ONbJhhxFvt1cLBh+qwK2eqISfBb06eRnNeC71oBokDm3zyCnkOtMDGl7IvnMfZfEPFCfg5QgJVk1msPpRvQxmEsrX9MQRyFVzgy2CWNIb7c+jPapyrNwoUbANlN8adU1m6yOuoX7F49x+OjiG2se0EJ6nafeKUXw/+hiJZvELUYgzKUtMAZVTNZfT8jjb58j8GVtuS+6TM2AutbejaCV84ZK58E2CRJqhmjQibEUO6KPdD7oTlEkFy52Y1uOOBXgYpqMzufNPmfdqqqSM4dU70PO8ogyKGiLAIxCetMjjm6FCMEA3Kc8K0Ig7/XtFm9By6VxTJK1Mg36TlHaZKP6VzVLXMtesJECAwEAAQ==",
];

$config = $config3;


if ($_SERVER['REQUEST_METHOD'] === 'GET') { ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Equity Payment API Test</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <form action="" method="post" class="w-5/6 lg:w-1/3 mx-auto my-12 py-12 px-8 shadow rounded-md">
    <img src="https://platform.linc.cd/assets/images/logoIcon/logo.png" class="block mx-auto h-16" />
    <label class="block w-full mb-2">Montant (USD)
      <input type="number" name="amount" required min="1" class="w-full px-5 py-1 border border-gray-300 rounded focus:ring block mt-1" step="0.01">
    </label>
    <label class="block w-full mb-2">Email
      <input type="email" name="email" required  class="w-full px-5 py-1 border border-gray-300 rounded focus:ring block mt-1">
    </label>
    <label class="block w-full mb-2">Téléphone
      <input type="tel" name="phone" required  class="w-full px-5 py-1 border border-gray-300 rounded focus:ring block mt-1">
    </label>
    <label class="block w-full mb-2">Adresse
      <textarea name="address" required  class="w-full px-5 py-1 border border-gray-300 rounded focus:ring block mt-1" rows="3"></textarea>
    </label>
    <button type="submit" class="w-full block py-3 text-center bg-indigo-500 text-white cursor-pointer rounded mt-5 hover:bg-indigo-600">Payer</button>
  </form>
</body>
</html>
<?php }else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				

// This is to ensure browser does not timeout after 30 seconds
ini_set('max_execution_time', 300);
set_time_limit(300);

// Public key on the API listener used to encrypt keys
//sandbox
$public_key = 'MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAszE+xAKVB9HRarr6/uHYYAX/RdD6KGVIGlHv98QKDIH26ldYJQ7zOuo9qEscO0M1psSPe/67AWYLEXh13fbtcSKGP6WFjT9OY6uV5ykw9508x1sW8UQ4ZhTRNrlNsKizE/glkBfcF2lwDXJGQennwgickWz7VN+AP/1c4DnMDfcl8iVIDlsbudFoXQh5aLCYl+XOMt/vls5a479PLMkPcZPOgMTCYTCE6ReX3KD2aGQ62uiu2T4mK+7Z6yvKvhPRF2fTKI+zOFWly//IYlyB+sde42cIU/588msUmgr3G9FYyN2vKPVy/MhIZpiFyVc3vuAAJ/mzue5p/G329wzgcz0ztyluMNAGUL9A4ZiFcKOebT6y6IgIMBeEkTwyhsxRHMFXlQRgTAufaO5hiR/usBMkoazJ6XrGJB8UadjH2m2+kdJIieI4FbjzCiDWKmuM58rllNWdBZK0XVHNsxmBy7yhYw3aAIhFS0fNEuSmKTfFpJFMBzIQYbdTgI28rZPAxVEDdRaypUqBMCq4OstCxgGvR3Dy1eJDjlkuiWK9Y9RGKF8HOI5a4ruHyLheddZxsUihziPF9jKTknsTZtF99eKTIjhV7qfTzxXq+8GGoCEABIyu26LZuL8X12bFqtwLAcjfjoB7HlRHtPszv6PJ0482ofWmeH0BE8om7VrSGxsCAwEAAQ==';
//openapi
//$public_key = '';

$session_file_name = 'session_id'. date('-d-m-Y') .'.txt';

$has_session = file_exists ( $session_file_name );
if(!$has_session){

    // Create Context with API to request a SessionKey
    $context = new APIContext();
    // Api key
    $context->set_api_key($config["api_key"]);
    // Public key
    $context->set_public_key($config["public_key"]);
    // Use ssl/https
    $context->set_ssl(true);
    // Method type (can be GET/POST/PUT)
    $context->set_method_type(APIMethodType::GET);
    // API address
    $context->set_address($config["host_address"]);
    // API Port
    $context->set_port(443);
    // API Path
    $context->set_path('/sandbox/ipg/v2/vodacomDRC/getSession/');
    //$context->set_path('/openapi/ipg/v2/vodacomDRC/getSession/');
    
    // Add/update headers
    $context->add_header('Origin', '*');
    
    // Parameters can be added to the call as well that on POST will be in JSON format and on GET will be URL parameters
    // context->add_parameter('key', 'value');
    
    // Create a request object
    $request = new APIRequest($context);
    
    // Do the API call and put result in a response packet
    $response = null;
    
    try {
    	$response = $request->execute();
    } catch(exception $e) {
    	echo 'Call failed: ' . $e->getMessage() . '<br>';
    }
    
    if ($response->get_body() == null) {
    	throw new Exception('SessionKey call failed to get result. Please check.');
    }
    
    // Display results
    //echo $response->get_status_code() . '<br>';
    //echo $response->get_headers() . '<br>';
    //echo $response->get_body() . '<br>';
    
    // Decode JSON packet
    $decoded = json_decode($response->get_body());
    
    $session_id = $decoded->output_SessionID;
    
    file_put_contents($session_file_name, $session_id);
    
    die("Come back 1 minutes after");

}else{
    $session_id = file_get_contents($session_file_name);
}

// The above call issued a sessionID which can be used as the API key in calls that needs the sessionID
$context = new APIContext();
$context->set_api_key($session_id);
$context->set_public_key($config["public_key"]);
$context->set_ssl(true);
$context->set_method_type(APIMethodType::POST);
$context->set_address($config["host_address"]);
$context->set_port(443);
$context->set_path('/sandbox/ipg/v2/vodacomDRC/c2bPayment/singleStage/');
//$context->set_path('/openapi/ipg/v2/vodacomDRC/c2bPayment/singleStage/');

$context->add_header('Origin', '*');

$context->add_parameter('input_Amount', $_POST['amount']);
$context->add_parameter('input_Country', 'DRC');
$context->add_parameter('input_Currency', 'USD');
//$context->add_parameter('input_CustomerMSISDN', '000000000001');
echo 'Phone number:' . $_POST['phone'] . '<br><br>';
$context->add_parameter('input_CustomerMSISDN', $_POST['phone']);
$context->add_parameter('input_ServiceProviderCode', '000000');
$context->add_parameter('input_ThirdPartyConversationID', uniqid("third_party_id_"));
$context->add_parameter('input_TransactionReference', uniqid("ref_"));
$context->add_parameter('input_PurchasedItemsDesc', 'Test LinC');

$request = new APIRequest($context);

// SessionID can take up to 30 seconds to become 'live' in the system and will be invalid until it is
//if(!$has_session)sleep(30);

$response = null;

try {
	$response = $request->execute();
} catch(exception $e) {
	echo 'Call failed: ' . $e->getMessage() . '<br>';
}

if ($response->get_body() == null) {
	throw new Exception('API call failed to get result. Please check.');
}

echo $response->get_status_code() . '<br><br>';
echo $response->get_headers() . '<br><br>';
echo $response->get_body() . '<br><br>';
    						
    						
    						
}




						
?>