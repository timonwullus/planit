<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/CompleteDAO.php';

class ListController extends Controller {

  public function  __construct() {
    $this->completeDAO = new CompleteDAO();
  }

  public function list(){
    $complete = $this->completeDAO->selectAllProducts(10);
    $this->set('complete', $complete);
    $this->set('title', 'List');
    $this->set('currentPage', 'list');
  }
}
