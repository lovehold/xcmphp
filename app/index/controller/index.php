<?php

/*
 *
 * Use the PSR -4 standard writing class and load class;
 *  Controller  control the input and output of data  and simple operation;
 *  Model    take the charge of database logic operations;
 *  Lib      include Third-party libraries;
 * 
 * */

namespace App\index\Controller;

use \APP\View;
use \App\Controller;
use \App\Model\Test;  //load class Test
use \App\Lib\Testlib; //load  class Testlib  from third library


class index extends Controller
{

    public function action_index(){
        echo "pdo connect test<hr>";
        $model =new Test();
        $data = $model->getAll('admin');
        var_dump($data);
        $lib = new Testlib();
        echo "<hr>";
        var_dump($lib->getValue(123));
        View::render();
    }

}
