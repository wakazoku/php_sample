<?php require '../header.php'; ?>

<table>
    <tr>
        <td>商品番号</td>
        <td>商品名</td>
        <td>価格</td>
    </tr>
    <?php
    $pdo = new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 'staff', 'password');
    foreach ($pdo->query('select * from product')as $row) {
        echo '<tr>';
        echo '<td>',htmlspecialchars($row['id']),'</td>';
        echo '<td>',htmlspecialchars($row['name']),'</td>';
        echo '<td>',htmlspecialchars($row['price']),'</td>';
        echo '</tr>';
        echo "\n";
    }
    ?>
</table>    

<?php require '../footer.php'; ?>