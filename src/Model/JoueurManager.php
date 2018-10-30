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

    public function insert($category): int
    {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (`name`) VALUES (:name)");
        $statement->bindValue('name', $category->getName(), \PDO::PARAM_STR);
        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
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
        $statement = $this->pdo->prepare("DELETE FROM " . self::TABLE . " WHERE `id` = :id");
        $statement->bindValue('id', $category->getId(), \PDO::PARAM_INT);
        return $statement->execute();
    }
}