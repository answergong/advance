<?php
/**
 * Created by PhpStorm.
 * User: gxz
 * Date: 2018/8/8
 * Time: 13:49
 */

namespace backend\models;

class EmailSenderBy163
{
    private $name;//随便定义的一个私有属性

    public function __construct($name = '')
    {
        $this->name = $name;
    }

    public function send()
    {
        echo '我是163发邮件!';
    }
}