<?php require '../header.php'; ?>
<table>
    <tr>
        <th>商品番号</th>
        <th>商品名</th>
        <th>商品価格</th>
    </tr>
    <?php

    $pdo = new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 'staff', 'password');
    if (isset($_REQUEST['command'])) {
        switch ($_REQUEST['command']) {
            case 'insert':
                if (empty($_REQUEST['name']) ||
                        !preg_match('/[0-9]+/', $_REQUEST['price']))
                    break;
                $sql = $pdo->prepare('insert into product values(null,?,?)');
                $sql->execute(
                        [htmlspecialchars($_REQUEST['name']), $_REQUEST['price']]);
                break;
            case 'update':
                if (empty($_REQUEST['name']) ||
                        !preg_match('/[0-9]+/', $_REQUEST['price']))
                    break;
                $sql = $pdo->prepare(
                        'update product set name=?, price=? where id=?');
                $sql->execute(
                        [htmlspecialchars($_REQUEST['name']), $_REQUEST['price'],
                            $_REQUEST['id']]);
                break;
            case 'delete':
                $sql = $pdo->prepare('delete from product where id=?');
                $sql->execute([$_REQUEST['id']]);
                break;
        }
    }
    foreach ($pdo->query('select * from product') as $row) {
        echo '<tr>';
        echo '<form action="edit3.php" method="post">';
        echo '<input type="hidden" name="command" value="update">';
        echo '<input type="hidden" name="id" value="', $row['id'], '">';
        echo '<td>', $row['id'], '</td>';
        echo '<td>';
        echo '<input type="text" name="name" value="', $row['name'], '">';
        echo '</td>';
        echo '<td>';
        echo '<input type="text" name="price" value="', $row['price'], '">';
        echo '</td>';
        echo '<td><input type="submit" value="更新"></td>';
        echo '</form>';
        echo '<form action="edit3.php" method="post">';
        echo '<input type="hidden" name="command" value="delete">';
        echo '<input type="hidden" name="id" value="', $row['id'], '">';
        echo '<td><input type="submit" value="削除"></td>';
        echo '</form>';
        echo '</tr>';
        echo "\n";
    }
    ?>
    <tr>
    <form action="edit3.php" method="post">
        <input type="hidden" name="command" value="insert">
        <td></td>
        <td><input type="text" name="name"></td>
        <td><input type="text" name="price"></td>
        <td><input type="submit" value="追加"></td>
    </form>
</tr>
</table>
<?php require '../footer.php'; ?>
