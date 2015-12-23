<?php  

$fn = array(
'id' => '111111',
'first_name' => 'имя клиента',
'last_name' => 'фамилия',
'middle_name' => 'отчество',
'email' => 'test@test.ru',
'phone' => '89200000000',
'utm' => array(
    'medium' => 'med',
    'source' => 'sour',
    'campaign' => 'comp'
    ),
'items' => array(
array(
'id' => '123',
'title' => 'Курс',
'sum' => '990'
),
array(
'id' => '456',
'title' => 'Курс2',
'sum' => '9990'
)
)
); 

echo "<form action='order_jc.php' method='post'>"; 


foreach($fn as $key => $val) 
{ 
      echo "<input type=hidden name=$key value=$val>"; 
} 
echo  "<input type='submit' value='Новая сделка'>";
echo  "</form><br><br><br>";


echo "<form action='paid_jc.php' method='post'>"; 


foreach($fn as $key => $val) 
{ 
      echo "<input type=hidden name=$key value=$val>"; 
} 
echo  "<input type='submit' value='Оплачено'>";
echo  "</form><br><br><br>";

?>
