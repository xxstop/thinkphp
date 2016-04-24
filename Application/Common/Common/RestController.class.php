<?php
namespace Common\Common;

use Think\Controller\RestController as TpRestController;

class RestController extends TpRestController
{
    protected $returnType = 'json';

    /**
     * Rest报错方法
     *
     * @param string $code
     * @param string $message
     */
    public function error($code, $message)
    {
        parent::response(array(
            'error_code' => intval($code),
            'error'      => $message,
        ), $this->returnType, 400);
    }

    /**
     * Rest返回数据方法
     *
     * @param mixed $data
     * @param null $code
     * @param bool $continue
     */
    public function response($data, $code=NULL, $continue=FALSE)
    {
        parent::response(
            empty($data) ? new \stdClass() : $data,
            $this->returnType,
            $code
        );
    }
}