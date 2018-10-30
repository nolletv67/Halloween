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


}

// récupération de tous les items

