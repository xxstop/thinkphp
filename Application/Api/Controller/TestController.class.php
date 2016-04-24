<?php
/**
 * Created by PhpStorm.
 * User: haizi
 * Date: 16/4/24
 * Time: 下午9:33
 */

namespace Api\Controller;

use Common\Common\RestController;

class TestController extends RestController
{
    public function read_get()
    {
        echo 'hello World!';
    }

    public function read_post()
    {
        var_dump($this->request->header('client'));
        echo 'hello post';
    }
}