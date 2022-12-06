<?php

    function test(){
        return 'test';
    }

    //echo function_exists('test');

    if (function_exists('test')) {
        echo 'has test function';
    }else {
        echo 'no test function';
    }

    function shortenit($str,$limit = 10){
        $characternumber = strlen($str);
        if ($characternumber > $limit) {
            if(function_exists('mb_substr')){
                $str = substr($str, 0 , $limit , 'utf8') . '...';
            }else{
                $str = substr($str, 0 , $limit) . '...';
            }
        }
        return $str;
    }
?>