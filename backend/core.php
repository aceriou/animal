<?php
# SQL Configuration
function db ( ) {
  $host     = 'localhost';
  $username = 'username';
  $password = 'password';
  $database = 'database';
  
  $db = new mysqli ( $host, $username, $password, $database );
  
  if ( $db->connect_error ) {
    die ( '<br /><br /><strong>In English:</strong><br />Doge cannot connect to the MySQL database, so instead it went to the moon. <br /><br /> <img src=\'http://revelwallpapers.net/d/735A64776548374C7670323971377143784B4E7632747650375A64766E673D3D/doge-dog-astronaut-meme-moon-landing-earth-planet-flag.jpg\' width=800 height=500></img> ' );
  }
  
  return $db;
  
}

# Define Constants
$query = mysqli_query(db(), "SELECT * FROM constants");
while ($row=mysqli_fetch_assoc($query)) {
  define($row['const_name'], $row['const_value']);
}

# Functions
function doSafe ( $string ) {
  return htmlentities ( mysqli_real_escape_string ( db ( ), $string ) );
}


?>
