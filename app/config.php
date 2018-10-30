<?php
/**
 * Created by PhpStorm.
 * User: Benedicte
 * Date: 11/10/2018
 * Time: 10:29
 */

//Constantes réutilisables partout

//Influence l'affichage de messages d'erreurs ou les performances
// Twig
//Indication d'où se trouvent les répertoires de vue et de cache pour Twig :

define('APP_DEV', true);
define('APP_VIEW_PATH', __DIR__ . '/../src/View/');
define('APP_CACHE_PATH', __DIR__ . '/../temp/cache/');
