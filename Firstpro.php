<?php
namespace app\firstpro\controller;

class Sayhello
{
    
    public function hello($name = 'ThinkPHP5')
    {
        return 'this is a hello,' . $name;
    }
}
