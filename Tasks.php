<?php
class Appointment {
    function __construct(public $id, public $animal_name, public $breed, public $birth_date, public $owner_name, public $owner_phone, public $doctor_name, public $specialty, public $treatment_type, public $treatment_date, public $notes) {}
}

class Tasks {
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
            $appointments[] = new Appointment($row->id, $row->animal_name, $row->breed, $row->birth_date, $row->owner_name, $row->owner_phone, $row->doctor_name, $row->specialty, $row->treatment_type, $row->treatment_date, $row->notes);
        }
        return $appointments;
    }


    function addAppointment($animal_name, $breed, $birth_date, $owner_name, $owner_phone, $doctor_name, $specialty, $treatment_type, $treatment_date, $notes) {
        $sql = "INSERT INTO appointments (animal_name, breed, birth_date, owner_name, owner_phone, doctor_name, specialty, treatment_type, treatment_date, notes) 
                VALUES ('$animal_name', '$breed', '$birth_date', '$owner_name', '$owner_phone', '$doctor_name', '$specialty', '$treatment_type', '$treatment_date', '$notes')";
        $this->conn->query($sql);
    }
}
?>
