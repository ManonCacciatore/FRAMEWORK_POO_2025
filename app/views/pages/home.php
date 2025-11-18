<H2>Recent Books</H2>

<ul>
    <?php foreach ($books as $book) : ?>
        <li>

            <?php echo $book->title; ?> :

            <?php echo \Core\Helpers::truncate($book->resume, 30); ?>
        </li>
    <?php endforeach; ?>
</ul>


<H2>Recent Authors</H2>

<ul>
    <?php foreach ($authors as $author) : ?>
        <li>

            <?php echo $author->firstname; ?> <?php echo $author->lastname; ?>

        </li>
    <?php endforeach; ?>
</ul>