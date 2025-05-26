<?php
include_once "Appointments.php";
$appointmentsModel = new Appointments("localhost", "root", "", "vet_clinic");
$appointments = $appointmentsModel->getAppointments();

echo "<h2>Időpontok listája</h2>";
echo "<a href='?action=new' class='btn btn-primary'>Új időpont hozzáadása</a>";
echo "<table class='table'>";
echo "<thead><tr><th>ID</th><th>Kedvenc neve</th><th>Gazdi neve</th><th>Dátum</th><th>Idő</th><th>Akciók</th></tr></thead>";
echo "<tbody>";
foreach ($appointments as $appointment) {
    echo "<tr>
        <td>{$appointment->id}</td>
        <td>{$appointment->pet_name}</td>
        <td>{$appointment->owner_name}</td>
        <td>{$appointment->appointment_date}</td>
        <td>{$appointment->appointment_time}</td>
        <td><a href='?action=delete&id={$appointment->id}'>Törlés</a></td>
    </tr>";
}
echo "</tbody></table>";
?>
