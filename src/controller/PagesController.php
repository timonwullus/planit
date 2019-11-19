<?php

require_once __DIR__ . '/Controller.php';

class PagesController extends Controller {

  public function index() {
    // $truckDAO = new TruckDAO();
    // $trucks = $truckDAO->selectAll();
    // $this->set('trucks', $trucks);
    $this->set('title', 'Home');
    $this->set('currentPage', 'home');
  }

  // public function detail() {
  //   $this->set('title', 'Detail');
  //   $this->set('currentPage', 'detail');
  // }
}
