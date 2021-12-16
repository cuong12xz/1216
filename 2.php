<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
</style>

<body> 
    <h2> duoi</h2>
<?php

    
     $dayso =array(
        8,9,16,9,7
    );
    asort($dayso);
    
    
        $min =$dayso[0];
        foreach($dayso as $k=>$v){
           echo $v.'<br>';
        }
        for($i=0;$i<count($dayso);$i++)
        {
            
            if($min>=$dayso[$i])
            $min=$dayso[$i];
        }
        echo 'min là '.$min."<hr>";
        $max =$dayso[0];
        // foreach($dayso as $k=>$v){
        //    if($max<=$v)
        //    $v=$max;
        // }
        for($i=0;$i<count($dayso);$i++)
        {
            
            if($max<=$dayso[$i])
            $max=$dayso[$i];
        }
        echo 'max là '. $max;

        
    
 ?>   
</body>

</html>