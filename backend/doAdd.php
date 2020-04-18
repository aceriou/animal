<?php
require_once 'core.php';

if ( isset ( $_POST['submit'] ) ) {
  $animal_image = doSafe ( $_POST['animal_image'] );
  $animal_name = doSafe ( $_POST['animal_name'] );
  $animal_description = doSafe ( $_POST['animal_description'] );
  $animal_price = doSafe ( $_POST['animal_price'] );
  
  // do some checks here another time
  
  $query = mysqli_query(db(), "INSERT INTO animals (animal_image, animal_name, animal_description, animal_price) VALUES('".$animal_image."','".$animal_name."','".$animal_description."','".$animal_price."')");
  
  echo "added. <a href=manage.php>back</a>";
}

?>