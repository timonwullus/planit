<?php
  require_once( __DIR__ . '/DAO.php');

  class RegionDAO extends DAO {
    public function selectRegions(){
      $sql = "SELECT * FROM `regions`";
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
  }
?>
