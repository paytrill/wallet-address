<?php
	$paytril_coin_AUTH = 'Hash key of exchanger having base/block on PATHASH';
	$paytril_user_holder = 'Email Address of User';
	$coin_name = 'coin that passes through PATHASH Blocks. e.g paytrill';
	
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
	CURLOPT_URL => "https://paytrill.com/api/walletaddress_api.php?paytril_coin_AUTH=$paytril_coin_AUTH&paytril_user_holder=$paytril_user_holder&coin_name=$coin_name",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
?>
