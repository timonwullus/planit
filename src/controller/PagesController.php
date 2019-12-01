<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProductDAO.php';
require_once __DIR__ . '/../dao/CategoryDAO.php';
require_once __DIR__ . '/../dao/RegionDAO.php';
require_once __DIR__ . '/../dao/CompleteDAO.php';


class PagesController extends Controller {
  public function  __construct() {
    $this->productDAO = new ProductDAO();
    $this->categoryDAO = new CategoryDAO();
    $this->regionDAO = new RegionDAO();
    $this->completeDAO = new CompleteDAO();
  }

  public function index() {

    $this->set('title', 'Home');
    $this->set('currentPage', 'home');
  }

  public function form() {
    $complete = $this->completeDAO->selectAll();
    $this->set('complete', $complete);
    $this->set('categories',$this->categoryDAO->selectCategories());
    $this->set('title', 'Type cadeau');
    $this->set('currentPage', 'form');
  }

  public function nextform() {
    if (!empty($_GET['id'])) {
      $products = $this->productDAO->selectProductsByCategory($_GET['id']);
    }else {
      header('Location: index.php?page=form');
      exit();
    }

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'insertData') {
        $data = array(
          'product' => $_POST['product'],
          'date' => $_POST['date'],
          'region' => $_POST['region']
        );
        $insertCompleteResult = $this->completeDAO->insert($data);
        if (!$insertCompleteResult) {
          $errors = $this->completeDAO->validate($data);
          $this->set('errors', $errors);
        } else {
          header('Location: index.php?page=detail&id=' . $complete['product_id']);
          exit();
        }
      }
    }

    $currentDate = date_default_timezone_set('Europe/Brussels');
    $this->set('currentDate', $currentDate);
    $this->set('products',$this->productDAO->selectProductsByCategory($_GET['id']));
    $this->set('regions',$this->regionDAO->selectRegions());
    $complete = $this->completeDAO->selectAll();
    $this->set('title', 'Welk cadeau');
    $this->set('currentPage', 'nextform');
    $this->set('complete', $complete);
  }

  public function detail(){
    if (isset($_GET['id'])) {
      $complete = $this->completeDAO->selectById($_GET['id']);
      $this->set('complete', $complete);
    }

    $this->set('product',$this->completeDAO->selectProductByProductId());
    $this->set('title', 'Detail');
    $this->set('currentPage', 'detail');
  }

}
