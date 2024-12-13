
<?php
require_once 'consts.php';
require_once 'functions.php';

$data = get_data(API_URL);
$untilMessage = get_until_message($data["days_until"]);
?>


<?php render_template('head') ?>

<?php render_template('main') ?>

<?php render_template('styles') ?>
