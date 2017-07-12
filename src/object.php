<?php


interface Controller
{
    public function action();
}

/**
 * Class ModelCreator
 */
class ModelCreator
{
    public static function getModel($name)
    {
        return new $name();
    }
}

class ViewCreator
{
    public static function getView($name)
    {
        return new $name();
    }
}
include_once 'controller/controller-databasehenlder.php';
include_once 'controller/controller-index.php';
include_once 'controller/controller-product.php';
include_once 'controller/controller-product-list.php';
include_once 'controller/controller-about.php';
include_once 'model/model-product-list.php';
include_once 'model/model-product.php';
include_once 'model/model-index.php';
include_once 'model/model-about.php';
include_once 'views/view.php';


