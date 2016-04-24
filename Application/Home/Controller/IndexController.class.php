<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index($id)
    {
        echo $id;
        echo "Hello World!";
    }
}