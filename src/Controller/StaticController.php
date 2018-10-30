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
    public function login()
    {
        if (isset($_POST['pseudo'])) {


            session_start();

            $_SESSION['pseudo'] = $_POST['pseudo'];


            header('Location: /map');

        }
        return $this->twig->render('login.html.twig');
    }
}