<?php
/**
 * Created by PhpStorm.
 * User: Benedicte
 * Date: 08/10/2018
 * Time: 14:58
 */

namespace Model;


class BonbonManager extends AbstractManager{

    const TABLE = 'bonbon';

    public function __construct($pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    public function random()
    {
        $statement = $this->pdo->prepare("SELECT * FROM " . $this->table . " ORDER BY RAND() LIMIT 1");
        $statement->setFetchMode(\PDO::FETCH_BOTH);
        $statement->execute();
        return $statement->fetch();



    }
}


