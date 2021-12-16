<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .box{
        padding: 20px;
    }
</style>

<body>

    <?php
    $daymau= array(
        '#00aefd',
       '#ffa400',
       '#07a787',
       '#ff7870',
       'black',
       'pink',
       'yellow',
       '#e74c3c',
       '#2979ff'
         );


    for ($i = 2; $i < 10; $i++) {
    ?>
    <div class="box" style="float:left;" >
        <table style="background:<?php echo $daymau[rand(0,count($daymau))];?>;" >
            <?php
            for ($j = 0; $j < 11; $j++) {
            ?>
                <tr >
                    <td><?php echo $i; ?></td>
                    <td>x</td>
                    <td><?php echo $j; ?></td>
                    <td>=</td>
                    <td><?php echo $i * $j; ?></td>
                </tr>
            <?php
                
            }
            ?>




        </table></div>
    <?php 
    if ($i % 4 == 1)
            echo "<div style='clear:both'></div>";
    } ?>
    <?php
    function ramdom(){
        
    }
    ?>
</body>

</html>