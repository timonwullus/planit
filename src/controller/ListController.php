<?php

require_once __DIR__ . '/Controller.php';

class ListController extends Controller {
  public function detail() {
    // $truckDAO = new TruckDAO();
    // $trucks = $truckDAO->selectAll();
    // $this->set('trucks', $trucks);
    $this->set('title', 'Detail');
    $this->set('currentPage', 'detail');
  }

  public function planner() {
    // $truckDAO = new TruckDAO();
    // $trucks = $truckDAO->selectAll();
    // $this->set('trucks', $trucks);
    $this->set('title', 'Planner');
    $this->set('currentPage', 'planner');
  }

  public function list() {
    // $truckDAO = new TruckDAO();
    // $trucks = $truckDAO->selectAll();
    // $this->set('trucks', $trucks);
    $this->set('title', 'List');
    $this->set('currentPage', 'list');
  }
}
