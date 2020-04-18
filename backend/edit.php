<?php
require_once 'core.php';
if (!isset($_GET['id'])) die ("no id");

$query = mysqli_query ( db( ), "SELECT * FROM animals WHERE id = '". $_GET['id'] ."'" );
$array = mysqli_fetch_assoc( $query );
if ( mysqli_num_rows( $query ) <= 0) die ("invalid id");


?>

<h2>
  add an animal
</h2>

<a href="manage.php">exit</a>
<br><br>

<form action="doEdit.php" method="post">
  <input type="text" name="animal_name" value="<?php echo $array['animal_name']; ?>" placeholder="Animal Name"><br>
  <input type="text" name="animal_image" value="<?php echo $array['animal_image']; ?>" placeholder="Animal Image URL"><br>
  <input type="text" name="animal_description" value="<?php echo $array['animal_description']; ?>" placeholder="Description for listing"><br>
  <input type="text" name="animal_price" value="<?php echo $array['animal_price']; ?>" placeholder="Price for adoption"><br>
  <input type="submit" name="submit" value="Save"><br>
  <a href=doRemove.php?id=<?php echo $array['id']; ?>>remove</a>
</form>


