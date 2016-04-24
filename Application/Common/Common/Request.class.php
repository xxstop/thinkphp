<?php
namespace Common\Common;


class Request
{
    static protected $instance = null;

    private $headers;

    private function __construct()
    {
        $this->_parseRequest();
    }

    static public function getInstance()
    {
        if (self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * 得到header的信息
     *
     * @param $key
     * @param string $default
     * @return string
     */
    public function header($key, $default='')
    {
        return isset($this->headers[$key]) ? $this->headers[$key] : $default;
    }

    private function _parseRequest()
    {
        $this->_parseHeader();
    }

    private function _parseHeader()
    {
        $headers = array();
        foreach (I('server.') as $key => $value) {
            if ('HTTP_' == substr($key, 0, 5)) {
                $headers[str_replace('_', '-', substr($key, 5))] = $value;
            }
        }
        $this->headers = $headers;
    }
}