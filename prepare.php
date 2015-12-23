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
		#Если код ответа не равен 200 или 204 - возвращаем сообщение об ошибке
		if($code!=200 && $code!=204)
			throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undescribed error',$code);
	}
	catch(Exception $E)
	{
		die('Ошибка: '.$E->getMessage().PHP_EOL.'Код ошибки: '.$E->getCode());
	}
}

$data=array(
    'id'=>isset($_POST['id']) ? $_POST['id'] : '',
	'first_name'=>isset($_POST['first_name']) ? $_POST['first_name'] : 'ss',
	'phone'=>isset($_POST['phone']) ? $_POST['phone'] : '',
	'email'=>isset($_POST['email']) ? $_POST['email'] : 'sd',
	'items'=>isset($_POST['items']) ? $_POST['items'] : '',
	'utm'=>isset($_POST['utm']) ? $_POST['utm'] : '',
	'created'=>isset($_POST['created']) ? $_POST['created'] : '',
	'paid'=>isset($_POST['paid']) ? $_POST['paid'] : '',	
);

$data=array(
'id' => '10327922',
'first_name' => 'имя клиента',
'last_name' => 'фамилия',
'middle_name' => 'отчество',
'email' => '3@test.ru',
'phone' => '89200000000',
'created' => '2450450171',
'paid' => '2450450171',
'utm' => array(
    'medium' => 'med',
    'source' => 'sour',
    'campaign' => 'comp'
    ),
'items' => array(
array(
'id' => '123',
'title' => 'Курс',
'sum' => '990',
'partners' => array (
    0 => array (
        'partner_lvl' => '1',
        'partner_id' => '123456',
        'partner_name' => 'Ivanov',
        'partner_fee' => '350'
        ),
    1 => array (
        'partner_lvl' => '2',
        'partner_id' => '654321',
        'partner_name' => 'Petrov',
        'partner_fee' => '35'
        ),
    ),
),
array(
'id' => '456',
'title' => 'Курс2',
'sum' => '9990'
)
)
); 

$title1=$data['items'][0]['title'];
$sum1=$data['items'][0]['sum'];
$title2=$data['items'][1]['title'];
$sum2=$data['items'][1]['sum'];
$title3=$data['items'][2]['title'];
$sum3=$data['items'][2]['sum'];
$title4=$data['items'][3]['title'];
$sum4=$data['items'][3]['sum'];
$sum=$sum1+$sum2+$sum3+$sum4;

$partner1=$data['items'][0]['partners'][0]['partner_name'];
$fee1=$data['items'][0]['partners'][0]['partner_fee'];
$partner2=$data['items'][0]['partners'][1]['partner_name'];
$fee2=$data['items'][0]['partners'][1]['partner_fee'];
$profit=$sum-$fee1-$fee2;


#Если не указано имя или e-mail контакта - уведомляем
if(empty($data['id']))
	die('Не заполнен номер сделки');
if(empty($data['first_name']))
	die('Не заполнено имя контакта');
if(empty($data['email']))
	die('Не заполнен E-mail контакта');
?>