<?php

require_once( __DIR__ . '/DAO.php');

class CompleteDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT * FROM `complete` LIMIT 3";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT * FROM `complete` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function insert($data) {
    // $errors = $this->validate( $data );
    // if (empty($errors)) {
      $sql = "INSERT INTO `complete` (`product_id`, `date`, `region_id`) VALUES (:product_id, :date, :region_id)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':product_id', $data['product_id']);
      $stmt->bindValue(':date', $data['date']);
      $stmt->bindValue(':region_id', $data['region_id']);
      if ($stmt->execute()) {
        return $this->selectById($this->pdo->lastInsertId());
      }
    // }
    // return false;
  }

  public function selectAllProducts($limit){
    $sql = "SELECT * FROM `complete`
    INNER JOIN `products` ON `complete`.`product_id` = `products`.`id` ORDER BY `date` ASC LIMIT :limit";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':limit', $limit);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectProductByProductId($id){
    $sql = "SELECT * FROM `complete`
    INNER JOIN `products` ON `complete`.`product_id` = `products`.`id` WHERE `complete`.`id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectStoresByCategory($id){
    $sql = "SELECT * FROM `complete`
            INNER JOIN `products`
            ON `complete`.`product_id` = `products`.`id`
            INNER JOIN `regions`
            ON `complete`.`region_id` = `regions`.`id`
            RIGHT JOIN `stores`
            ON `products`.`category_id` = `stores`.`category_id`
            AND `regions`.`id` = `stores`.`region_id`
            INNER JOIN `prices`
            ON `products`.`id` = `prices`.`product_id`
            AND `stores`.`id` = `prices`.`store_id`
            WHERE `complete`.`id` = :id
            ORDER BY `prices`.`price` ASC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectPriceByStore($id){

  }

  // public function validate( $data ){
  //   $errors = [];
  //   if (!isset($data['product'])) {
  //     $errors['product'] = 'Gelieve product te kiezen';
  //   }
  //   if (!isset($data['date'])) {
  //     $errors['date'] = 'Gelieve een datum te kiezen';
  //   }
  //   if (!isset($data['region'])) {
  //     $errors['region'] = 'Gelieve een regio te kiezen';
  //   }
  //   return $errors;
  // }
}
