<?php  

$fn = array(
'id' => '123456',
'first_name' => 'John',
'email' => 'test@test.com',
'phone' => '+1 310 0000000',
'utm' => array(
    'medium' => 'social',
    'source' => 'facebook',
    'campaign' => 'test1'
    ),
'items' => array(
array(
'id' => '001',
'title' => 'Lesson 1',
'sum' => '990'
),
array(
'id' => '002',
'title' => 'Lesson 2',
'sum' => '9990'
)
)
); 

echo "<form action='order_jc.php' method='post'>"; 
foreach($fn as $key => $val) 
{ 
      echo "<input type=hidden name=$key value=$val>"; 
} 
echo  "<input type='submit' value='Order'>";
echo  "</form><br><br><br>";

echo "<form action='paid_jc.php' method='post'>"; 
foreach($fn as $key => $val) 
{ 
      echo "<input type=hidden name=$key value=$val>"; 
} 
echo  "<input type='submit' value='Paid'>";
echo  "</form>";

?>
