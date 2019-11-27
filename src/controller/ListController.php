<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProductDAO.php';

class ListController extends Controller {
  private $productDAO;

  public function  __construct() {
    $this->productDAO = new ProductDAO();
  }

  // public function index() {
  //   $this->set('products',$this->productDAO->selectProducts());
  // }

  public function list(){
    // $this->set('products',$this->productDAO->selectProducts());
    $products = $productDAO->selectProducts();

    $this->set('products', $products);
    $this->set('title', 'List');
    $this->set('currentPage', 'list');
  }
}
