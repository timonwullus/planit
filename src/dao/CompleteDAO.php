<?php

require_once( __DIR__ . '/DAO.php');

class CompleteDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT * FROM `complete`";
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

      $sql = "INSERT INTO `complete` (`product`, `date`, `region`) VALUES (:product, :date, :region)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':product', $data['product']);
      $stmt->bindValue(':date', $data['date']);
      $stmt->bindValue(':region', $data['region']);
      $stmt->execute();
      // if ($stmt->execute()) {
      //   return $this->selectById($this->pdo->lastInsertId());
      // }

  }

}
