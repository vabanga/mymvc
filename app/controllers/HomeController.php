<?php


namespace Controllers;

use Config\Render;
use Core\Controller;


class HomeController extends Controller
{


    public function indexAction()
    {
        Render::rend($this->route['controller']);
    }
}