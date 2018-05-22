<?php require '../header.php'; ?>
<?php require './menu.php'; ?>
<form action="product_.php" method="post">
    商品検索
    <input type="text" name="keyword">
    <input type="submit" value="検索">
</form>
<?php
echo '<table>';
echo '<th>商品番号</th><th>商品名</th><th>価格</th>';
$pdo = new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 'staff', 'password');
if (isset($_REQUEST['keyword'])) {
    $sql = $pdo->prepare('select * from product where name like ?');
    $sql->execute(['%' . $_REQUEST['keyword'] . '%']);
}
?>

<?php
require '../footer.php';
