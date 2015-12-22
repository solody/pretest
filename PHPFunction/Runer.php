<?php
namespace solody\pretest;

class Runer
{
    function __construct() {
        
        $array = array(
            array('id'=>19, 'name'=>'Kent'),
            array('id'=>12, 'name'=>'Canvas'),
            array('id'=>16, 'name'=>'Naner'),
            array('id'=>6, 'name'=>'Banana'),
            array('id'=>6, 'name'=>'Banana====='),
        );
        
        
        print_r(array_filter($array, function ($item) {
            //print_r($item);
            if ($item['name'] == Kent) {
                return true;
            }
        }));
        
        
        // 排序
        usort($array, function ($a ,$b) {
            if ($a['id'] == $b['id']){
                return 0;
            } else if ($a['id'] > $b['id']) {
                return 1;
            } else {
                return -1;
            }
        });
        
        print_r($array);
        
    }
}

new Runer();