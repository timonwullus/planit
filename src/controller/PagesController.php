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
    $this->set('categories',$this->categoryDAO->selectCategories());
    $complete = $this->completeDAO->selectAllProducts(3);
    $this->set('complete', $complete);
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
          'product_id' => $_POST['product_id'],
          'date' => $_POST['date'],
          'region_id' => $_POST['region_id']
        );
        $insertData = $this->completeDAO->insert($data);
        header('Location: index.php?page=detail&id=' . $link['id']);
        $this->set('link',$this->completeDAO->selectCompleteByProduct($_POST['id']));;

      //   if (!$insertCompleteResult) {
      //     $errors = $this->completeDAO->validate($data);
      //     $this->set('errors', $errors);
      //   }
      //   else {
      //     header('Location: index.php?page=detail');
      //     exit();
      //   }
      }
    }

    $currentDate = date_default_timezone_set('Europe/Brussels');
    $this->set('currentDate', $currentDate);
    $this->set('products',$this->productDAO->selectProductsByCategory($_GET['id']));
    $this->set('regions',$this->regionDAO->selectRegions());
    $this->set('complete',$this->completeDAO->selectAll());
    $complete = $this->completeDAO->selectAllProducts(3);
    $this->set('title', 'Welk cadeau');
    $this->set('currentPage', 'nextform');
    $this->set('complete', $complete);
  }

  public function detail(){
    if (isset($_GET['id'])) {
      $complete = $this->completeDAO->selectById($_GET['id']);
      $this->set('complete', $complete);
      $product = $this->completeDAO->selectProductByProductId($_GET['id']);
      $this->set('product', $product);
      $stores = $this->completeDAO->selectStoresByCategory($_GET['id']);
      $this->set('stores', $stores);
    }

    $this->set('title', 'Detail');
    $this->set('currentPage', 'detail');
  }

}
