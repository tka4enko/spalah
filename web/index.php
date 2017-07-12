<?php

require_once '../src/object.php';

$controller = $_GET['controller'] . 'Controller';
//$controller = 'ProductController';

$controller = new $controller();
$controller->action();


/*
1) Заставить код работать с файлами типа "index.html"
2) Каждый класс должен быть в отдельном файле
3) Создать общий DatabaseHandler
4) Вывести картинки
5) Использовать шаблоны с предыдущей лекции
 */