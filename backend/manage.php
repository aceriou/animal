<?php require_once 'core.php'; ?>
<h2>
  manage animals
</h2>

<a href="add.php">add animal</a> <a href="#">import animals</a> <a href="dash.php">exit</a>

<br><br>

<br>
<?php
$query = mysqli_query ( db( ), "SELECT * FROM animals" );
while ( $row = mysqli_fetch_assoc( $query ) ) {
  echo "<img src=" . $row['animal_image'] . " height=100 width=100><br>";
  echo $row['animal_name'] . "<br>";
  if ($row['animal_description'] == "") $row['animal_description'] = "No description provided.";
  echo $row['animal_description'] . " - " . $row['animal_price'];
  echo "<br><a href=edit.php?id=". $row['id'] .">manage listing</a>";
  
  echo "<br>";
  echo "<br>";
  echo "<br>";
}
?>
