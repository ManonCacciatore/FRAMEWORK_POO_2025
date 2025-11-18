<?php


namespace Core;

use \PDO, \PDOException;

class DB
{
    private static $connexion = null;

    private static function setConnexion()
    {

        try {
            SELF::$connexion = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getConnexion()
    {
        if (SELF::$connexion == null) :
            SELF::setConnexion();
        endif;
        return SELF::$connexion;
    }
}
