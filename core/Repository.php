<?php

namespace Core;

use \PDO, \Core\DB;

abstract class Repository
{
    protected static $_table_name, $_class;

    protected static function init()
    {
        // App\Models\BooksRepository
        // App\Models\AuthorsRepository
        // echo static::class;
        $root_name = basename(str_replace('\\', '/', static::class), 'Repository'); // Books - Authors
        static::$_table_name = strtolower($root_name); // books - authors
        static::$_class = '\App\Models\\' . basename($root_name, 's'); // \App\Models\Book - \App\Models\Author
    }

    public static function findAll(int $limit = 9): array
    {
        static::init();
        $sql = "SELECT *
            FROM " . static::$_table_name . "
            ORDER BY created_at DESC
            LIMIT :limit;";
        $rs = DB::getConnexion()->prepare($sql);
        $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_CLASS, static::$_class);
    }

    public static function findOneById(int $id): Object
    {
        static::init();
        $sql = "SELECT *
            FROM " . static::$_table_name . "
            WHERE id = :id;";
        $rs = DB::getConnexion()->prepare($sql);
        $rs->bindValue(':id', $id, PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchObject(static::$_class);
    }
}
