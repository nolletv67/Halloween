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
    public function map()
    {
        return $this->twig->render('map.html.twig');
    }
    public function gain()

    {
        session_start();

        $random1 = rand(1,2);
        $random2 = rand(1,5);
        $random3 = rand(1,10);

        $bonbonManager1 = new Model\BonbonManager($this->pdo);
        $name1 = $bonbonManager1->random();
        $bonbonManager2 = new Model\BonbonManager($this->pdo);
        $name2 = $bonbonManager2->random();
        $bonbonManager3 = new Model\BonbonManager($this->pdo);
        $name3 = $bonbonManager3->random();


        $manche1 = new Model\Joueur();

        $manche1 ->setPseudo($_SESSION['pseudo']);
        $manche1 ->setBonbonName($name1['name']);
        $manche1 ->setQuantity($random1);
        $manche1 ->setPoints(100);
        $manche1 ->setCodeBarre($name1['codeBarre']);



        $manche2 = new Model\Joueur();

        $manche2 ->setPseudo($_SESSION['pseudo']);
        $manche2 ->setBonbonName($name2['name']);
        $manche2 ->setQuantity($random2);
        $manche2 ->setPoints(25);
        $manche2 ->setCodeBarre($name2['codeBarre']);


        $manche3 = new Model\Joueur();

        $manche3 ->setPseudo($_SESSION['pseudo']);
        $manche3 ->setBonbonName($name3['name']);
        $manche3 ->setQuantity($random3);
        $manche3 ->setPoints(5);
        $manche3 ->setCodeBarre($name3['codeBarre']);


        $manager = new Model\JoueurManager($this->pdo);
        $manager ->insert($manche1);
        $manager ->insert($manche2);
        $manager ->insert($manche3);




        return $this->twig->render('gain.html.twig', ['name1' => $name1, 'name2' => $name2, 'name3'=> $name3, 'random1' => $random1, 'random2' => $random2, 'random3' => $random3, 'session' => $_SESSION]);
    }

    public function Collection()
    {
        session_start();

        $collectionsManager = new Model\JoueurManager($this->pdo);
        $collections = $collectionsManager ->select("Boby");

        $totalPoints = $collectionsManager ->points("Boby");

        return $this->twig->render('collection.html.twig', ['collections' => $collections, 'totalPoints' => $totalPoints, 'session' => $_SESSION]);
    }
}