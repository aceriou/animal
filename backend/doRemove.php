<?php
require_once 'core.php';

if ( isset ( $_GET['id'] ) ) {
  $id = doSafe($_GET['id']);
  $query = mysqli_query(db( ), "DELETE FROM animals WHERE id = '" . $id . "'");
  if (!$query) { die ("error"); }
  else {
    echo "removed. <a href=manage.php>back</a>";
  }
}

?>