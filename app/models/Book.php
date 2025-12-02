<?php

namespace App\Models;

class Book extends \Core\Model
{

    public $title, $resume, $author_id, $category_id, $cover, $isbn;

    // Liasons 1-N

    protected $author;
    protected $category;
}
