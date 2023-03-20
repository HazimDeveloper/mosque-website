<?php
// Get the selected "daerah" from the AJAX request
$daerah = $_POST['daerah'];

include 'config.php';

// Prepare and execute the SELECT query to get the masjids in the selected "daerah"
$stmt = mysqli_query($connect,"SELECT * FROM masjid WHERE daerah_masjid = '$daerah'");

// Create an array to store the masjids
$masjids = array();

// Loop through the result and add each masjid to the array
while ($row = mysqli_fetch_assoc($stmt)) {
  $masjids[$row['id_masjid']] = $row['nama_masjid'];
}

// Close the database connection

// Send the array of masjids as a JSON response
header('Content-Type: application/json');
echo json_encode($masjids);
?>
