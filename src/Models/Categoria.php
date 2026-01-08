<?php
namespace Models;

class Categoria{
  private $db;

  public function __construct($db)
  {
    $this->db = $db->getDb();
  }

  public function getFilterCategoria($filteringValue) {
    if(!$filteringValue || $filteringValue === "") {
        $stm = $this->db->prepare("SELECT a.id_producte, a.nom_producte,a.descripcio_curta,a.productor, a.email_contacte, a.preu,a.data_alta, b.name AS categoria
          FROM Producte a
          INNER JOIN categories b ON b.id = a.id_categoria
          ORDER BY data_alta DESC;");
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    $stm = $this->db->prepare('SELECT a.id_producte,a.nom_producte,a.descripcio_curta,a.productor, a.email_contacte, a.preu,a.data_alta, b.name AS categoria
        FROM Producte a
        INNER JOIN categories b ON b.id = a.id_categoria
        WHERE b.name LIKE :value
        ORDER BY data_alta DESC;');
    $likeValue = "%".$filteringValue."%";
    $stm->bindValue(':value', $likeValue, \PDO::PARAM_STR);

    $stm->execute();
    return $stm->fetchAll(\PDO::FETCH_ASSOC);
  }
}