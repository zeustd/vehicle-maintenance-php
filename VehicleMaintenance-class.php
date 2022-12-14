<?php

class VehicleMaintenance {
  private $conn; // database connection object

  // constructor
  public function __construct($db_conn) {
    $this->conn = $db_conn;
  }

  // method to create a new maintenance record
  public function create($vehicle_id, $maintenance_type, $date, $cost) {
    $query = "INSERT INTO vehicle_maintenance (vehicle_id, maintenance_type, date, cost) VALUES (?, ?, ?, ?)";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("issd", $vehicle_id, $maintenance_type, $date, $cost);
    $stmt->execute();
    return $stmt->insert_id;
  }
}

?>
