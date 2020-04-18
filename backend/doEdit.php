<?php
require_once 'core.php';

if ( isset ( $_POST['submit'] ) ) {
  $animal_image = doSafe ( $_POST['animal_image'] );
  $animal_name = doSafe ( $_POST['animal_name'] );
  $animal_description = doSafe ( $_POST['animal_description'] );
  $animal_price = doSafe ( $_POST['animal_price'] );
  
  if ( strlen( $animal_name ) > 30 ) die ( "animal name is too long." );
  if ( strlen( $animal_name ) < 3 ) die ( "animal name is too short." );
  if ( strlen( $animal_description ) > 200 ) die ( "description is too long" );
  
  $update = mysqli_query(db( ), "UPDATE animals SET animal_image = '" . $animal_image . "', animal_name = '" . $animal_name . "', animal_description = '" . $animal_description . "', animal_price = '" . $animal_price . "' WHERE animal_name = '".$animal_name."' ");
  if (!$update) { die ("error"); }
  else {
    echo "edited. <a href=manage.php>back</a>";
  }
  
}

?>