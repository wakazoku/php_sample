<?php require '../header.php'; ?>
<table>
    <tr>
        <th>商品番号</th>
        <th>商品名</th>
        <th>商品価格</th>
    </tr>
    <tr>
    <form action="edit3_.php" method="post">
        <input type="hidden" name="command" value="input">
        <td><input type="text" name="name"></td>
        <td><input type="text" name="price"></td>
        <td><input type="submit" name="追加"></td>
    </form>
    </tr>
</table>
<?php require '../footer.php'; ?>