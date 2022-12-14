<?php
include('VehicleMaintenance-class.php');

// connect to database
$conn = new mysqli("host", "username", "password", "database");

// create VehicleMaintenance object
$vm = new VehicleMaintenance($conn);

// create a new maintenance record
$new_id = $vm->create(1, "Oil change", "2022-12-14", 50.00);

?>
