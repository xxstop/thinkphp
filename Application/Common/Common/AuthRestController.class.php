<?php
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