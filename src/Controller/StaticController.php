<?php
/**
 * Created by PhpStorm.
 * User: worti
 * Date: 30/10/18
 * Time: 15:58
 */

namespace Controller;


class StaticController extends AbstractController
{

    public function index(){
        return $this->twig->render('index.html.twig');
    }


    public function login()
    {

      if ((@$_POST['pseudo'] <> '') && ($_POST['login'] == 'login')) {

           session_start();

           $_SESSION['pseudo'] = $_POST['pseudo'];

           header('Location: /map/');
       }

        return $this->twig->render('login.html.twig');
    }
}