<?php
/**
 * Created by PhpStorm.
 * User: Shisui
 * Date: 23.04.2018
 * Time: 15:26
 */

namespace Core;


abstract class Controller
{
    public $route;

    public function  __construct($route)
    {
        $this->route = $route;
    }
}