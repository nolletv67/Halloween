<?php
/**
 * Created by PhpStorm.
 * User: Benedicte
 * Date: 11/10/2018
 * Time: 10:59
 */

namespace Model;


class Bonbon
{
    private $id;
    private $name;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque): void
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getCodeBarre()
    {
        return $this->codeBarre;
    }

    /**
     * @param mixed $codeBarre
     */
    public function setCodeBarre($codeBarre): void
    {
        $this->codeBarre = $codeBarre;
    }
    private $marque;
    private $codeBarre;


}