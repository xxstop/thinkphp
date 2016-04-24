<?php
namespace Home\Controller;

use Common\Common\AuthRestController;

class InfoController extends AuthRestController
{
    public function read_get()
    {
        $this->response($this->request->header());
    }
}