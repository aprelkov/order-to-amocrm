<?php
# Describe the Array, which will come to you from the external Service.
$data=array(
'id' => '123456',
'first_name' => 'Alexey',
'email' => 'test@AlexeyAprelkov.ru',
'phone' => '+79276920009',
'created' => time(),
'paid' => time(),
'utm' => array(
    'medium' => 'social',
    'source' => 'fb',
    'campaign' => 'programmers'
),
'items' => array(
    array(
        'id' => '001',
        'title' => 'Lesson 1',
        'sum' => '990',
        'partners' => array (
            0 => array (
                'partner_lvl' => '1',
                'partner_id' => '100136',
                'partner_name' => 'Mike Black',
                'partner_fee' => '350'
            ),
            1 => array (
                'partner_lvl' => '2',
                'partner_id' => '100137',
                'partner_name' => 'John Brown',
                'partner_fee' => '35'
            )
        )
    ),
    array(
        'id' => '002',
        'title' => 'Lesson 2',
        'sum' => '9900',
        'partners' => array (
            0 => array (
                'partner_lvl' => '1',
                'partner_id' => '100136',
                'partner_name' => 'Mike Black',
                'partner_fee' => '350'
            ),
            1 => array (
                'partner_lvl' => '2',
                'partner_id' => '100137',
                'partner_name' => 'John Brown',
                'partner_fee' => '35'
            )
        )
    )
)); 
?>
