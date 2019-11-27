<?php
  require_once( __DIR__ . '/DAO.php');

  class ProductsDAO extends DAO {
    public function selectProducts(){
      $sql = "SELECT * FROM `products`";
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
  }
?>
