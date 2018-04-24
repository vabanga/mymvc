<?php


namespace Config;


use Twig_Environment;
use Twig_Loader_Array;
use Twig_Loader_Chain;
use Twig_Loader_Filesystem;

class Render
{
    public static function rend($view, $arr = [])
    {
        ucfirst($view);
        $loader = new Twig_Loader_Filesystem(ROOT . DS . 'app' . DS . 'views' . DS);

        $twig = new Twig_Environment($loader);

        $loader->addPath(ROOT . DS . 'public' . DS);
        $template = $twig->load($view . '.twig');

        $template->display($arr);
    }
}