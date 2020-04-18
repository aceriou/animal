<?php require_once 'backend/core.php'; ?>
<head>
  <title><?php echo SITE_NAME; ?></title>
  <!-- css and whatever else here -->
</head>

<center>
  <h1><?php echo SITE_NAME; ?></h1>
  description of the website here

  <br><br>

  <?php
  // replace this with loadFeed()
  
  $query = mysqli_query ( db(), "SELECT * FROM animals" );
  while ( $row = mysqli_fetch_assoc( $query ) ) {
    echo "<img src=" . $row['animal_image'] . " width=100 height=100><br>";
    echo $row['animal_name'] . "<br>";
    if ($row['animal_description'] == '') {
      echo "No description given.";
    } else {
      echo $row['animal_description'];
    }
    echo "<br><br>";
  }
  
  ?>
  
  <br><br>
  <a href="backend/dash.php">admin panel</a>
</center>