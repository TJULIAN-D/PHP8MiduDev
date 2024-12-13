
<?php
require_once 'consts.php';
require_once 'functions.php';

$data = get_data(API_URL);
$untilMessage = get_until_message($data["days_until"]);
?>


<?php require 'sections/head.php' ?>

<?php include 'sections/main.php' ?>

<?php require 'sections/styles.php' ?>
