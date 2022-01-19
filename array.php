<?php

$studentlist = array('Asma','Sokina','Jorina','Kuddus','Rahim');
# $totalstd = count($studentlist);   #for counting the number of element. 

for($i=0; $i< count($studentlist);$i++)
{
    echo $studentlist[$i]."<br>";
}

$stulist = array('Name','Sokina','Jorina','Kuddus','Rahim');

foreach($stulist as $stlist)  #indexed array
{
    echo $stlist."<br>";
}

$stdulist =array('Adam'=>'20000 USD','Rahim'=>'25000 USD');

foreach($stdulist as $key => $value)  #assoiciative array
{
    echo $value."<br>";
}



?>