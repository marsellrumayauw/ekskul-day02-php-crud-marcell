<?php

// integrasi konekso
    require_once


// Create database
$sql = " DATABASE sagu_foundation";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}