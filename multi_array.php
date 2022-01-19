<?php

$studentlist = array(
    array('name'=>'Omar','email'=> 'omar@gmail.com','is_single'=>true,),
    array('name'=>'Hasem','email'=> 'hasem@gmail.com','is_single'=>false,),
    array('name'=>'Rahim','email'=> 'rahim@gmail.com','is_single'=>true,),
    array('name'=>'Salam','email'=> 'salam@gmail.com','is_single'=>false,),

);
for($i=0;$i<count($studentlist);$i++)
    {
        foreach($studentlist[$i] as $key=>$value )
        {
            echo $key." ".$value."<br>";
            
        }
}


?>