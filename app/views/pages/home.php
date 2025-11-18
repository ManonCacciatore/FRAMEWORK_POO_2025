<H2>Recent Books</H2>

<ul>
    <?php foreach ($books as $book) : ?>
        <li>
            <?php echo $book['title']; ?>
        </li>
    <?php endforeach; ?>
</ul>