<?php
require_once 'core.php';

?>

<h2>
  add an animal
</h2>

<a href="manage.php">exit</a>
<br><br>

<form action="doAdd.php" method="post">
  <input type="text" name="animal_name" placeholder="Animal Name"><br>
  <input type="text" name="animal_image" placeholder="Animal Image URL"><br>
  <input type="text" name="animal_description" placeholder="Description for listing"><br>
  <input type="text" name="animal_price" placeholder="Price for adoption"><br>
  <input type="submit" name="submit" value="Save"><br>

</form>