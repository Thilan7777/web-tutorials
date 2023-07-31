<?php
function= &units
{
    $bill=0;
    if(&units<=50)
    {
        &rate=3.5;
    }
    else if(&units<=100)
    {
        &rate=4.00;
    }
    else if(&units<=150)
    {
        &rate=5.20;
    }
    else(&units)
    {
        &rate=6.50;
    }
    $bill+=&units*&rate;
    return $bill;
}
$units=100;
$bill=&units;
echo"The bill is Rs.".$bill;
?>