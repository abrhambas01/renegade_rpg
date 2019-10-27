<?php require('partials/head.php'); ?>

<!-- if theres no logged on user .. currently found in util.php-->
<?php if (there_is_a_logged_on_user() == false ):   ?>
<?php require('partials/main/nav.php'); ?>
<?php require('partials/main/storyline.php'); ?>

<?php else : ?>

<?php require('partials/dashboard/nav.php'); ?>
<?php require('partials/dashboard/content.php'); ?>

<?php endif ?>

<?php require('partials/footer.php'); ?>