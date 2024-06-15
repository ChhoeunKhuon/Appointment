<?php
  $dbCon = mysqli_connect('localhost', 'root', '', 'dbpatientappointmentv2') or die ('Not Connected');
  if ($dbCon->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Successfully connected to the database";
}
?>