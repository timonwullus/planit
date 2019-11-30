<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/HolidayDAO.php';
require_once __DIR__ . '/../dao/ProductDAO.php';
require_once __DIR__ . '/../dao/CategoryDAO.php';
require_once __DIR__ . '/../dao/RegionDAO.php';
require_once __DIR__ . '/../dao/CompleteDAO.php';


class PagesController extends Controller {
  public function  __construct() {
    $this->holidayDAO = new HolidayDAO();
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
    $this->set('title', 'Type cadeau');
    $this->set('currentPage', 'form');
  }

  public function nextform() {
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'insertData') {
        $data = array(
          'product' => $_POST['product'],
          'date' => $_POST['date'],
          'region' => $_POST['region']
        );
        $insertCompleteResult = $this->completeDAO->insert($data);
      }
    }

    $this->set('products',$this->productDAO->selectProductsByCategory($_GET['id']));
    $this->set('holidays',$this->holidayDAO->selectHolidays());
    $this->set('regions',$this->regionDAO->selectRegions());
    $this->set('title', 'Welk cadeau');
    $this->set('currentPage', 'nextform');

    $complete = $this->completeDAO->selectAll();
    $this->set('complete', $complete);
    $this->set('title', 'Overview');
  }

  public function detail(){
    if (isset($_GET['id'])) {
      $complete = $this->completeDAO->selectById($_GET['id']);
      $this->set('complete', $complete);
    }

    $this->set('title', 'Detail');
    $this->set('currentPage', 'detail');
  }

}
