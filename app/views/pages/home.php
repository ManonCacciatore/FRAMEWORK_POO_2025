<?php Core\Template::startSection('title') ?>
Homepage
<?php Core\Template::endSection() ?>

<?php Core\Template::startSection('content') ?>
<?php include_once "../app/views/books/_recents.php" ?>

<?php include_once "../app/views/authors/_recents.php" ?>

<?php Core\Template::endSection() ?>