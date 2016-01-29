<?php

    $lead=array(
		'id' => $lead['id'],
		'last_modified' => $data['paid'],
		'status_id' => '142',
		'name' => $data['id']
		);
	if(!empty($partner1))
	$lead['custom_fields'][]=array(
		'id' => '790890',   # Replace this value on your custom field ID
		'values' => array(
			array(
				'value' => $partner1
			)
		)
    );
    if(!empty($fee1))
	$lead['custom_fields'][]=array(
		'id' => '790892',   # Replace this value on your custom field ID
		'values' => array(
			array(
				'value' => $fee1
			)
		)
    );
    if(!empty($partner2))
	$lead['custom_fields'][]=array(
		'id' => '801560',   # Replace this value on your custom field ID
		'values' => array(
			array(
				'value' => $partner2
			)
		)
    );
	if(!empty($fee2))
	$lead['custom_fields'][]=array(
		'id' => '801562',   # Replace this value on your custom field ID
		'values' => array(
			array(
				'value' => $fee2
			)
		)
    );
    if(!empty($profit))
	$lead['custom_fields'][]=array(
		'id' => '790896',   # Replace this value on your custom field ID
		'values' => array(
			array(
				'value' => $profit
			)
		)
    );
    
    $set['request']['leads']['update'][] = $lead;
    
# Create a link for request
$link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/leads/set';
$curl=curl_init(); # Save the cURL session handle
# Set the necessary options for cURL session
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
curl_setopt($curl,CURLOPT_URL,$link);
curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($set));
curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
curl_setopt($curl,CURLOPT_HEADER,false);
curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
 
$out=curl_exec($curl); # Initiate a request to the API and stores the response to variable
$code=curl_getinfo($curl,CURLINFO_HTTP_CODE);

$Response=json_decode($out,true);
$Response=$Response['response']['leads']['update'];

?>
