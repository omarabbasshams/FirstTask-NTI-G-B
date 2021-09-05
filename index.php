<?php

// Calculate electricity bill

$amount=70;
$price;


if($amount <= 50)
{
    $price = $amount * 3.5;
}
elseif ( $amount <= 100 && $amount > 50 )
{
    $price=$amount*4;
} 
else
{
    $price = $amount * 6.5 ;
}

echo 'Bill Amount = '.$price;

?>