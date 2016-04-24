<?php
namespace Common\Common;

use Think\Controller\RestController as TpRestController;

abstract class RestController extends TpRestController
{
    /**
     * @var Request
     */
    protected $request;
    protected $returnType = 'json';

    public function __construct()
    {
        parent::__construct();
        $this->request = Request::getInstance();

        $this->initialize();
    }

    /**
     * 初始化啥...
     */
    protected function initialize() {}

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