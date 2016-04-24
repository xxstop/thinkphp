<?php
/**
 * Created by PhpStorm.
 * User: xxstop
 * Date: 16/4/24
 * Time: 下午10:16
 */

namespace Common\Common;


abstract class AuthRestController extends RestController
{
    protected function initialize()
    {
        $this->validate();
    }

    private function validate()
    {

    }
}