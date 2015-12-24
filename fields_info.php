<?php

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
$fee11=$data['items'][0]['partners'][0]['partner_fee'];
$fee12=$data['items'][1]['partners'][0]['partner_fee'];
$fee13=$data['items'][2]['partners'][0]['partner_fee'];
$fee14=$data['items'][3]['partners'][0]['partner_fee'];
$fee1=$fee11+$fee12+$fee13+$fee14;
$partner2=$data['items'][0]['partners'][1]['partner_name'];
$fee21=$data['items'][0]['partners'][1]['partner_fee'];
$fee22=$data['items'][1]['partners'][1]['partner_fee'];
$fee23=$data['items'][2]['partners'][1]['partner_fee'];
$fee24=$data['items'][3]['partners'][1]['partner_fee'];
$fee2=$fee21+$fee22+$fee23+$fee24;
$profit=$sum-$fee1-$fee2;

$need=array_flip(array('POSITION','PHONE','EMAIL'));
if(isset($account['custom_fields'],$account['custom_fields']['contacts']))
	do
	{
		foreach($account['custom_fields']['contacts'] as $field)
			if(is_array($field) && isset($field['id']))
			{
				if(isset($field['code']) && isset($need[$field['code']]))
					$fields[$field['code']]=(int)$field['id'];
				
				$diff=array_diff_key($need,$fields);
				if(empty($diff))
					break 2;
			}
			if(isset($diff))
				die('В amoCRM отсутствуют следующие поля'.': '.join(', ',$diff));
			else
				die('Невозможно получить дополнительные поля');
		}
	while(false);
else
	die('Невозможно получить дополнительные поля');
$custom_fields=isset($fields) ? $fields : false;

?>
