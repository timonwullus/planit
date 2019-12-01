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
    $errors = $this->validate( $data );
    if (empty($errors)) {
      $sql = "INSERT INTO `complete` (`name`, `date`, `region_id`) VALUES (:name, :date, :region)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':name', $data['name']);
      $stmt->bindValue(':date', $data['date']);
      $stmt->bindValue(':region', $data['region']);
      // $stmt->execute();
      if ($stmt->execute()) {
        return $this->selectById($this->pdo->lastInsertId());
      }
    }
    return false;
  }

  public function selectProductByProductId(){
    $sql = "SELECT * FROM `complete`
            INNER JOIN `products`
            ON `complete`.`product_id` = `products`.`id`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function validate( $data ){
    $errors = [];
    if (!isset($data['product'])) {
      $errors['product'] = 'Gelieve product te kiezen';
    }
    if (!isset($data['date'])) {
      $errors['date'] = 'Gelieve een datum te kiezen';
    }
    if (!isset($data['region'])) {
      $errors['region'] = 'Gelieve een regio te kiezen';
    }
    return $errors;
  }
}
