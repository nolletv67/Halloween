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

       //return $this->pdo->query("SELECT SUM(points) FROM " .self::TABLE . " WHERE pseudo = " . $pseudo, \PDO::FETCH_UNIQUE)->fetch();

    }




    public function update($category) //requête SQL d'insertion pour éditer.
    {
        $statement = $this->pdo->prepare("UPDATE " . self::TABLE ." SET category.`name` = :name WHERE category.`id` = :id"); //UPDATE ... SET = syntaxe SQL pour éditer
        $statement->bindValue('name', $category->getName(), \PDO::PARAM_STR); //On associe la nouvelle valeur au paramètre
        $statement->bindValue('id', $category->getId(), \PDO::PARAM_INT); //On associe la nouvelle valeur au paramètre
        return $statement->execute();
    }

    public function delete($category) //requête SQL pour supprimer.
    {
        $statement = $this->pdo->prepare("DELETE FROM " . self::TABLE . " WHERE `id` = :id ");
        $statement->bindValue('id', $category->getId(), \PDO::PARAM_INT);
        return $statement->execute();
    }
}