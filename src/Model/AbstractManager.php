<?php
/**
 * Created by PhpStorm.
 * User: Benedicte
 * Date: 11/10/2018
 * Time: 11:02
 */

namespace Model;


abstract class AbstractManager
{
    protected $pdo; // connexion
    protected $table;
    protected $className;

    public function __construct($table, $pdo)
    {
        $this->pdo = $pdo;
        $this->table = $table;
        $this->className = __NAMESPACE__ . '\\' . ucfirst($table);
    }

    public function selectAll(): array
    {
        return $this->pdo->query('SELECT * FROM ' . $this->table, \PDO::FETCH_CLASS, $this->className)->fetchAll();
    }

    public function selectOneById(int $id) //récupère la ligne correspondant à $id (en paramètre).
    {
        $statement = $this->pdo->prepare("SELECT * FROM $this->table WHERE id=:id"); //On passe une requête préparée
        $statement->setFetchMode(\PDO::FETCH_CLASS, $this->className); //setFetchMode() nécessaire pour indiquer la classe liée au FETCH_CLASS
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(); //On utilise fetch() au lieu de fetchAll()
    }
}