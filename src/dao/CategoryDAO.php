<?php
  require_once( __DIR__ . '/DAO.php');

  class CategoryDAO extends DAO {
    public function selectCategories(){
      $sql = "SELECT * FROM `categories`";
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
  }
?>
