<?php
/**
 * Created by PhpStorm.
 * User: Benedicte
 * Date: 11/10/2018
 * Time: 10:35
 */

//Etant donné que la BDD était gérée dans chacune des méthodes des classes managers, dans le modèle (ce n'est pas DRY), on crée un fichier de connexion
//Cela permet de respecter le principe de "Single Responsability" (une classe = une responsabilité) en POO.

namespace App;

use \PDO;

//Les constantes APP_ définies dans db.php sont utilisées ici :

class Connection
{
    private $pdoConnection;

    public function __construct() //Initialise la connexion à PDO.
    {
        try {
            $this->pdoConnection = new PDO(
                'mysql:host='.APP_DB_HOST.'; dbname='.APP_DB_NAME.'; charset=utf8',
                APP_DB_USER,
                APP_DB_PWD
            );
//ATTR_DEFAULT_FETCH_MODE est définie à PDO::FETCH_CLASS qui permet de renvoyer les données de la BDD dans un objet
            $this->pdoConnection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_CLASS);
//ATTR_ERRMODE indique que les erreurs PDO seront renoyvées sous forme d'exception, et plus particulièrement les \PDOException qui sont attrapées plus bas dans le code
            if (APP_DEV) {
                $this->pdoConnection->setAttribute(PDO::ATTR_ERRMODE,   PDO::ERRMODE_EXCEPTION);
            }

        } catch (\PDOException $e) {
            die('<div class="error">Error !: '.$e->getMessage().'</div>');
        }
    }
//getter getPdoConnection() permet de récupérer la connexion PDO initialisée dans le constructeur
    public function getPdoConnection() :PDO
    {
        return $this->pdoConnection;
    }

}