<?php

function CheckCurlResponse($code)
    {
	$code=(int)$code;
	$errors=array(
		301=>'Moved permanently',
		400=>'Bad request',
		401=>'Unauthorized',
		403=>'Forbidden',
		404=>'Not found',
		500=>'Internal server error',
		502=>'Bad gateway',
		503=>'Service unavailable'
	);
	try
	{
		# If the response code is not equal to 200 or 204 - returns an error message
		if($code!=200 && $code!=204)
			throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undescribed error',$code);
	}
	catch(Exception $E)
	{
		die('Error: '.$E->getMessage().PHP_EOL.'Error code: '.$E->getCode());
	}
    }

$data=array(
    'id'=>isset($_POST['id']) ? $_POST['id'] : 'no_id',
    'first_name'=>isset($_POST['first_name']) ? $_POST['first_name'] : 'no_name',
    'phone'=>isset($_POST['phone']) ? $_POST['phone'] : '',
    'email'=>isset($_POST['email']) ? $_POST['email'] : 'no_email',
    'items'=>isset($_POST['items']) ? $_POST['items'] : '',
    'utm'=>isset($_POST['utm']) ? $_POST['utm'] : '',
    'created'=>isset($_POST['created']) ? $_POST['created'] : '',
    'paid'=>isset($_POST['paid']) ? $_POST['paid'] : ''	
    );

# The String below is used for testing
# To enable it - remove the sign # in front of the String below, to disable - return it
# require 'test/prepare.php';

?>
