<?php
/**
 * Created by PhpStorm.
 * User: Benedicte
 * Date: 08/10/2018
 * Time: 15:43
 */

namespace Controller;

use Model;

class JoueurController extends AbstractController
{
    protected $twig;

    public function gain()
    {
        $randomTresRare = rand(1,2);
        $randomRare = rand(1,5);
        $randomCommun = rand(1,10);

        $bonbonManager1 = new Model\BonbonManager($this->pdo);
        $name1 = $bonbonManager1->random();
        $bonbonManager2 = new Model\BonbonManager($this->pdo);
        $name2 = $bonbonManager2->random();
        $bonbonManager3 = new Model\BonbonManager($this->pdo);
        $name3 = $bonbonManager3->random();

        return $this->twig->render('gain.html.twig', ['name1' => $name1, 'name2' => $name2, 'name3'=> $name3, 'random1' => $randomTresRare, 'random2' => $randomRare, 'random3' => $randomCommun]);
    }
}