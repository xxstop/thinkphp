<?php
namespace Home\Controller;

use Home\Common\RestController;

class InfoController extends RestController
{
    Public function read_get(){
        $this->response(new \stdClass(), 'json');
    }
}