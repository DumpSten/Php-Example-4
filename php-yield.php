<?php
    // memory_get_used()
    // number_format()

    function byteToMB($byte){
        return number_format($byte / 1048576 , 2);
    }

    $numbers = range(0, 1000000);

    echo byteToMB(memory_get_usage()) . ' MB used';

    function say($beginning, $limit){
       for ($i=$beginning; $i <= $limit; $i++) { 
           yield $i;
        }
       
    }
    $numbers = say(0, 10000);
    echo '<br>';
    echo  byteToMB(memory_get_usage()) . ' MB used';

    /*
    foreach ($numbers as $number) {
        echo $number .'<br>';
    }
    */
?>