<?php
/* If, switch, match */
$stock = 5;
$ordered = 3;
//if 문
if ($stock > 0) {
    $message = "In stock";
} elseif ($ordered > 0) {
    $message = "Coming soon";
} else {
    $message = "Sold out!";
}
?>
<?php
// switch문
$day = 'tuesday';

switch($day) {
    case 'Monday':
        $offer = '20% off chocolates';
        break;
    case 'Tuesday':
        $offer = '20% off mints';
        break;
    default:
        $offer = '3 + 1 mints';
}

// Match문
$month = 'March';

$mth_offer = match($month) {
    'January', 'February' => '20% off mints',
    'March', 'April'      => '30% off chocolates',
    default               => '10% off whole order',
};
?>

        <?php require_once 'includes/header.php' ?>

        <h2>Chocolate</h2>
        <p><?= $message ?></p>

        <h2>Offers on <?= $day; ?></h2>
        <p><?= $offer ?></p>

        <h2>Offers in <?= $month; ?></h2>
        <p><?= $mth_offer; ?></p>

<?php include 'includes/footer.php' ?>
