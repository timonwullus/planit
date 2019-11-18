<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

$routes = array(
  'home' => array(
    'controller' => 'Pages',
    'action' => 'index'
  ),
  'form' => array(
    'controller' => 'Pages',
    'action' => 'form'
  ),
  'list' => array(
    'controller' => 'List',
    'action' => 'list'
  ),
  'detail' => array(
    'controller' => 'List',
    'action' => 'detail'
  ),
  'planner' => array(
    'controller' => 'List',
    'action' => 'planner'
  )
);

if (empty($_GET['page'])) {
  $_GET['page'] = 'home';
}
if (empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
