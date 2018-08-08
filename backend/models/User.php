<?php
/**
 * Created by PhpStorm.
 * User: gxz
 * Date: 2018/8/8
 * Time: 13:49
 */

namespace backend\models;

class User
{
    /**
     * 发邮件的对象
     *
     * @var String $name
     */
    private $emailSenderObject;

    /**
     * 构造方法
     *
     * @author   gongxiangzhu
     * @dateTime 2018/8/8 14:02
     *
     *
     * @return mixed
     */
    public function __construct(EmailSenderBy163 $emailSenderBy163)
    {
        $this->emailSenderObject = $emailSenderBy163;
    }

    /**
     * 注册方法(会发送邮件)
     *
     * @author   gongxiangzhu
     * @dateTime 2018/8/8 14:04
     *
     * @return mixed
     */
    public function register()
    {
        $this->emailSenderObject->send();
    }
}