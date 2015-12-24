<?php
#пропишите ниже массив, который вам будет приходить со стороннего сервиса
#ниже описан массив приходящий от Justclick при оплате там товара
$data=array(
'id' => '1111111',
'first_name' => 'Алексей Апрелков',
'email' => 'test@AlexeyAprelkov.ru',
'phone' => '+79276920000',
'created' => time(),
'paid' => time(),
'utm' => array(
    'medium' => 'social',
    'source' => 'vk',
    'campaign' => 'aaprelkov'
),
'items' => array(
    array(
        'id' => '001',
        'title' => 'Курс 1',
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
            )
        )
    ),
    array(
        'id' => '002',
        'title' => 'Курс 2',
        'sum' => '9900',
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
            )
        )
    ),
    array(
        'id' => '003',
        'title' => 'Курс 3',
        'sum' => '54000',
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
            )
        )
    ),
    array(
        'id' => '004',
        'title' => 'Курс 4',
        'sum' => '134000',
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
            )
        )
    )
)); 
?>
