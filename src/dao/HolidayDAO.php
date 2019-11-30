<?php
  require_once( __DIR__ . '/DAO.php');

  class HolidayDAO extends DAO {
    public function selectHolidays(){
      $sql = "SELECT * FROM `holidays`";
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
  }
