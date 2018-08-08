<?php

/**
 * Created by PhpStorm.
 * User: gxz
 * Date: 2018/8/8
 * Time: 13:21
 */

namespace common\service;

use yii\base\Exception;

Class Container
{
    private $_definitions;

    /**
     * 存储类的方法
     *
     * @author   gongxiangzhu
     * @dateTime 2018/8/8 13:23
     *
     * @param  string $class      类名称
     * @param  object $definition 一个回调函数，用于创建类 $class
     *
     * @return mixed
     */
    public function set($class, $definition)
    {
        $this->_definitions[$class] = $definition;
    }

    /**
     * 获取类的方法
     *
     * @author   gongxiangzhu
     * @dateTime 2018/8/8 13:31
     *
     * @param  string $class  类名称
     * @param  array  $params 回调函数的参数
     *
     * @return mixed
     * @throws Exception
     */
    public function get($class, $params = [])
    {
        if (isset($this->_definitions[$class]) && is_callable($this->_definitions[$class], true)) {
            $definition = $this->_definitions[$class];
            return call_user_func($definition, $this, $params);
        } else {
            throw new Exception("error");
        }
    }
}