<?php

namespace Core;

use \PDO, \Core\DB, \Core\Repository;

abstract class Controller
{

    protected static $_repository, $_records_name, $_record_name;

    public static function init()
    {
        $root_name = basename(str_replace('\\', '/', static::class), 'Controller'); // Books - Authors
        static::$_records_name = strtolower(substr($root_name, 0)); // books - authors
        static::$_record_name = strtolower(substr($root_name, 0, -1)); // book - author
        static::$_repository = '\App\Models\\' . $root_name . 'Repository';
    }

    public static function indexAction()
    {
        static::init();
        ${static::$_records_name} = static::$_repository::findAll();
        include '../app/views/' .  static::$_records_name . '/index.php';
    }

    public static function showAction(int $id): void
    {
        static::init();
        ${static::$_record_name} = static::$_repository::findOneById($id);
        include '../app/views/' . static::$_records_name . '/show.php';
    }
}
