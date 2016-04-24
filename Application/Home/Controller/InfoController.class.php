<?php
namespace Home\Controller;

use Common\Common\RestController;

class InfoController extends RestController
{
    public function read_get()
    {
        $this->response($this->request->header());
    }
}