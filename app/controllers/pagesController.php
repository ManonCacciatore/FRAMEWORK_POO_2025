<?php

namespace App\Controllers\PagesController;

use \PDO;

function homeAction(PDO $connexion)
{
    include_once '../app/models/booksModel.php';
    $books = \App\Models\BooksModel\findAll($connexion, 3);

    global $content, $title;
    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();
}
