<?php
class Appointments {
    private $conn;

    function __construct($server, $user, $password, $database) {
        $this->conn = new mysqli($server, $user, $password, $database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function getAppointments() {
        $sql = "SELECT * FROM appointments";
        $result = $this->conn->query($sql);
        $appointments = [];
        while ($row = $result->fetch_object()) {
            $appointments[] = $row;
        }
        return $appointments;
    }

    function addAppointment($pet_name, $owner_name, $appointment_date, $appointment_time) {
        $stmt = $this->conn->prepare("INSERT INTO appointments (pet_name, owner_name, appointment_date, appointment_time) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $pet_name, $owner_name, $appointment_date, $appointment_time);
        $stmt->execute();
    }

    function deleteAppointment($id) {
        $stmt = $this->conn->prepare("DELETE FROM appointments WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
?>
