<?php

namespace Models;

class Producte {
  private $db;

  public function __construct($db)
  {
      $this->db = $db->getDb();
  }

  public function createProducte($nom_producte,$descripcio_curta,$productor, $email_contacte, $preu, $id_categoria,$data_alta){
    try{
      $stm = $this->db->prepare('INSERT INTO Producte(id_categoria,nom_producte,descripcio_curta,productor, email_contacte, preu,data_alta) 
      VALUES (:id_cat,:nom,:descripcio,:productor,:email,:preu,:data_alta)');
      $stm->execute([
        ':nom' => $nom_producte,
        ':descripcio' => $descripcio_curta,
        ':productor' => $productor,
        ':email' => $email_contacte,
        ':preu' => $preu,
        ':id_cat' => $id_categoria,
        ':data_alta' => $data_alta,
      ]);
      return true;
    }catch(\PDOException $e){
      return false;
    }
  }

  public function getProductes(){
    try{
      $stm = $this->db->prepare('SELECT a.id_producte, a.nom_producte,a.descripcio_curta,a.productor, a.email_contacte, a.preu,a.data_alta, b.name AS categoria
        FROM Producte a
        INNER JOIN categories b ON b.id = a.id_categoria
        ORDER BY data_alta DESC;');
      $stm->execute([]);
     return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }catch (\PDOException){
      return false;
    }
  }
}