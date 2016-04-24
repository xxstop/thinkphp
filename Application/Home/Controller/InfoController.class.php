<?php
namespace Home\Controller;

use Common\Common\RestController;

class InfoController extends RestController
{
    public function read_get()
    {
        /* $headers = array();
        foreach ($_SERVER as $key => $value) {
            if ('HTTP_' == substr($key, 0, 5)) {
                $headers[str_replace('_', '-', substr($key, 5))] = $value;
            }
        }
        var_dump($headers); */
        $this->response([]);
    }
}