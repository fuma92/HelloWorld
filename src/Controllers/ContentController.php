<?php

namespace HelloWorld1\Controllers;


use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ContentController extends Controller
{
    public function sayHello(Twig $twig)
    {
        return $twig->render('HelloWorld1::content.hello');
    }
}
