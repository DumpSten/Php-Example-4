<?php

    /*
        func_num_args()
        func_get_args()
        func_get_arg()
    */

    function test()
    {
        echo func_num_args() .'<br>';
        print_r(func_get_args()) . '<br>';
        echo func_get_arg(3);
    }

    test('ALper' , 'Çatal' , 'Software' , 'Developer');

?>