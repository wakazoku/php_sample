<?php require '../header.php'; ?>
<?php

$postcode = $_REQUEST['postcode'];
if (preg_match('/^[0-9]{3}-[0-9]{4}$/', $postcode)) {
    echo '郵便局', $postcode, 'を確認しました。';
} else {
    echo $postcode, 'は適切な有文番号ではありません。';
}
?>

<?php require '../footer.php'; ?>
