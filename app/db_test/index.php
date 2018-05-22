<?php
$dsn = 'mysql:dbname=app;host='.$_ENV['MYSQL_PORT_3306_TCP_ADDR'] . ';charset=utf8';
$user = 'root';
$password = $_ENV['MYSQL_ENV_MYSQL_ROOT_PASSWORD'];

$dbh = new PDO($dsn, $user, $password);

$sql = 'select * from test;';
?>

<table border="1">
  <tr>
    <th>id</th>
    <th>name</th>
    <th>create_time</th>
    <th>update_time</th>
  </tr>

<?php
foreach ($dbh->query($sql, PDO::FETCH_ASSOC) as $row) {
  echo '<tr>';
  echo '<td>'. $row["id"] . '</td>';
  echo '<td>' . $row["name"] . '</td>';
  echo '<td>' . $row["create_time"] . '</td>';
  echo '<td>' . $row["update_time"] . '</td>';
  echo '</tr>';
}
?>
</table>