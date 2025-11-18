<?php

namespace App\Controllers;

use \PDO, \App\Models\BooksRepository;

abstract class PagesController
{

    public static function homeAction(PDO $connexion)
    {
        $books = BooksRepository::findAll($connexion, 3);

        global $content, $title;
        ob_start();
        include '../app/views/pages/home.php';
        $content = ob_get_clean();
    }
}
