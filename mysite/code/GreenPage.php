<?php

use UncleCheese\Green\Controller;

class MyGreenPageType extends Page
{
    // ...alternatively GreenExtension('JSON')

    private static $extensions = [
        "GreenExtension('YAML')",
    ];
}

class MyGreenPageType_Controller extends Controller
{

}
