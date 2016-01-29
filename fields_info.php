<?php

# Announce Variables

$title1=$data['items'][0]['title'];
$sum1=$data['items'][0]['sum'];
$title2=$data['items'][1]['title'];
$sum2=$data['items'][1]['sum'];
$sum=$sum1+$sum2+;

$partner1=$data['items'][0]['partners'][0]['partner_name'];
$fee11=$data['items'][0]['partners'][0]['partner_fee'];
$fee12=$data['items'][1]['partners'][0]['partner_fee'];
$fee1=$fee11+$fee12;
$partner2=$data['items'][0]['partners'][1]['partner_name'];
$fee21=$data['items'][0]['partners'][1]['partner_fee'];
$fee22=$data['items'][1]['partners'][1]['partner_fee'];
$fee2=$fee21+$fee22;
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
				die('In amoCRM missing the following fields: '.join(', ',$diff));
			else
				die('Unable to get additional fields');
		}
	while(false);
else
	die('Unable to get additional fields');
$custom_fields=isset($fields) ? $fields : false;

?>
