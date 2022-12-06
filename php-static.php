<?php 

    function say(){
        static $number = 1;
        echo $number . '<br>';
        $number++;
    }

    function download($value){
        static $downloads = [];
        $downloads[] = $value;
        return $downloads;
    }

    download('test.php');
    download('a.php');
    $downloads = download('b.php');
    
    print_r($downloads);
 ?>