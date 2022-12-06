<?php

    function say($number){
        echo $number;
        if ($number < 10) {
            say($number + 1);
        }
    }

    //say(1);

    $categories =[
        [
            'id' => 1,
            'parent' => 0,
            'name' => 'Lessons'
        ],
        [
            'id' => 2,
            'parent' => 0,
            'name' => 'current'
        ],
        [
            'id' => 3,
            'parent' => 0,
            'name' => 'Blog'
        ],
        [
            'id' => 4,
            'parent' => 1,
            'name' => ' PHP Lessons'
        ],
        [
            'id' => 5,
            'parent' => 1,
            'name' => ' CSS Lessons'
        ],
        [
            'id' => 6,
            'parent' => 4,
            'name' => 'funtcion'
        ],
        [
            'id' => 7,
            'parent' => 4,
            'name' => 'arrays'
        ]
    ];

    function categoriesList($categories , $parent = 0)
    {   
        $html = '';
        $html.= '<ul>';
        foreach ($categories as $categorie) {
            if($categorie['parent'] == $parent){
            $html .= '<li>' . $categorie['name'];
            $html .= categoriesList($categories, $categorie['id']);
            $html .= '</li>';
          }
        }
        $html .= '</ul>';
        return $html;
    }
    //echo categoriesList($categories);
    $arr = [
        'name' => 'Alper',
        'surname' => 'Çatal',
        'sports' => [
            'swimming' => 'yes',
            'running' =>  'yes',
            'defend-sports' => [
                'jeetkunedo' => 'yes',
                'judo' => 'no'
            ]

        ]
    ];

    function find_array($array , $key){
        foreach ($array as $keys => $val) {
            if ($keys == $key) {
                return $val;
            }
            if (is_array($val)) {
                $conclusion = find_array($val, $key);
                if ($conclusion) {
                    return $conclusion;
                }
            }
        }
        return false;
    }

    echo find_array($arr , 'running');


?>