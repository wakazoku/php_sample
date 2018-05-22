<?php require '../header.php'; ?>
<?php require './menu.php'; ?>
<?php

session_start();
if (isset($_SESSION['customer'])) {
    unset($_SESSION['customer']);
    echo 'ログアウトしました。';
} else {
    echo '既にログアウトしています。';
}
?>

<?php

require '../footer.php';
