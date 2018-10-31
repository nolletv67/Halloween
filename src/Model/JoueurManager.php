<?php
/**
 * Created by PhpStorm.
 * User: Benedicte
 * Date: 08/10/2018
 * Time: 15:44
 */

namespace Model;

use Model\Joueur;

class JoueurManager extends AbstractManager
{
    const TABLE = 'joueur';

    public function __construct($pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    public function insert($manche)
    {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " VALUES (null, :pseudo, :bonbonName, :quantity, :points, :codeBarre)");
        $statement->bindValue('pseudo',$manche ->getPseudo(), \PDO::PARAM_STR);
        $statement->bindValue('bonbonName',$manche ->getbonbonName(), \PDO::PARAM_STR);
        $statement->bindValue('quantity',$manche ->getQuantity());
        $statement->bindValue('points',$manche ->getPoints());
        $statement->bindValue('codeBarre', $manche ->getCodeBarre());

        $statement->execute();
        return $statement;
    }

    public function select($pseudo)
    {
        $statement = $this->pdo->prepare("SELECT pseudo, bonbonName, SUM(quantity) as quantity, SUM(points) FROM " .self::TABLE . " WHERE pseudo = :pseudo GROUP BY bonbonName ORDER BY quantity DESC");
        $statement->setFetchMode(\PDO::FETCH_CLASS, $this->className);
        $statement->bindValue('pseudo',$pseudo);
        $statement->execute();
        return $statement->fetchAll();

    }
    public function points($pseudo)
    {
        $statement = $this->pdo->prepare("SELECT SUM(points) as points FROM " .self::TABLE . " WHERE pseudo = :pseudo");
        $statement->setFetchMode(\PDO::FETCH_UNIQUE);
        $statement->bindValue('pseudo',$pseudo);
        $statement->execute();
        return $statement->fetch();

    }

    public function quantityTot($pseudo)
    {
        $statement = $this->pdo->prepare("SELECT SUM(quantity) as quantity FROM " .self::TABLE . " WHERE pseudo = :pseudo");
        $statement->setFetchMode(\PDO::FETCH_UNIQUE);
        $statement->bindValue('pseudo',$pseudo);
        $statement->execute();
        return $statement->fetch();
    }

    public function classementPoints()
    {
        $statement = $this->pdo->prepare("SELECT pseudo, SUM(points) as pointsTot FROM " .self::TABLE . " GROUP BY pseudo ORDER BY pointsTot DESC");
        $statement->setFetchMode(\PDO::FETCH_BOTH);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function classementQuantity()
    {
        $statement = $this->pdo->prepare("SELECT pseudo, SUM(quantity) as quantityTot FROM " .self::TABLE . " GROUP BY pseudo ORDER BY quantityTot DESC");
        $statement->setFetchMode(\PDO::FETCH_BOTH);
        $statement->execute();
        return $statement->fetchAll();
    }



}