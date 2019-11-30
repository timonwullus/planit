<?php
  require_once( __DIR__ . '/DAO.php');

  class ProductDAO extends DAO {
    public function selectProducts(){
      $sql = "SELECT * FROM `products`";
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectProductsByCategory($categoryId){
      $sql = "SELECT * FROM `products` WHERE `category_id`=:category_id";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':category_id', $categoryId);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectProductsByName($productName){
      $sql = "SELECT * FROM `products` WHERE `name`=:product_name";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':product_name', $productName);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

  }
?>
