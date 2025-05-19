<?php
include_once "Tasks.php";
$tasksModel = new Tasks("localhost", "root", "", "vet_clinic");
$appointments = $tasksModel->getAppointments();

echo "<h2 class='my-3'>Kezelések listája</h2>";
echo "<a href='?todo=new' class='btn btn-primary'>Új kezelés hozzáadása</a>";
echo "<table class='table table-striped'>";
echo "<thead>";
echo "<tr><th>ID</th><th>Állat neve</th><th>Fajta</th><th>Születési dátum</th><th>Gazda neve</th><th>Telefon</th><th>Orvos neve</th><th>Szakterület</th><th>Kezelet típus</th><th>Kezelet dátum</th><th>Megjegyzés</th></tr>";
echo "</thead>";
echo "<tbody>";

foreach ($appointments as $appointment) {
    echo "<tr>
        <td>$appointment->id</td>
        <td>$appointment->animal_name</td>
        <td>$appointment->breed</td>
        <td>$appointment->birth_date</td>
        <td>$appointment->owner_name</td>
        <td>$appointment->owner_phone</td>
        <td>$appointment->doctor_name</td>
        <td>$appointment->specialty</td>
        <td>$appointment->treatment_type</td>
        <td>$appointment->treatment_date</td>
        <td>$appointment->notes</td>
    </tr>";
}

echo "</tbody>";
echo "</table>";
?>
