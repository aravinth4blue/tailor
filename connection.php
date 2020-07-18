<?php
$mysqli = new mysqli("sql12.freesqldatabase.com","sql12355697","bA2aiHMnSl","sql12355697");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
