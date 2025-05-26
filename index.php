<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Állatorvosi Időpontfoglaló</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php
        include_once "Appointments.php";
        $appointmentsModel = new Appointments("localhost", "root", "", "vet_clinic");
        $action = $_GET['action'] ?? 'list';
        switch ($action) {
            case 'list':
                include_once "appointment_list.php";
                break;
            case 'new':
                include_once "new_appointment.php";
                break;
            case 'add':
                $pet_name = htmlspecialchars($_POST['pet_name']);
                $owner_name = htmlspecialchars($_POST['owner_name']);
                $appointment_date = htmlspecialchars($_POST['appointment_date']);
                $appointment_time = htmlspecialchars($_POST['appointment_time']);
                $appointmentsModel->addAppointment($pet_name, $owner_name, $appointment_date, $appointment_time);
                break;
        }
               
 

