<?php require '../header.php'; ?>
<?php
echo '<p>rand(): ', rand(), '</p>';
echo '<p>rand(1,6): ', rand(1, 6), '</p>';
echo '<p>getrandmax(): ', getrandmax(), '</p>';
echo '<img src="item', rand(0,2), '.png">';

?>

<?php require '../footer.php'; ?>