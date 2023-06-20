<?php

class Students extends Controller
{
    public function index($id=null)
    {
        echo "这里是Students控制器".$id;
    }
}