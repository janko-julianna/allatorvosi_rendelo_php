<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Állatorvosi rendelő</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <?php
        include_once "Tasks.php";
        $todo = $_GET['todo'] ?? 'list';
        $tasksModel = new Tasks("localhost", "root", "", "vet_clinic");

        switch ($todo) {
            case 'list':
                include_once "appointment_list.php";
                break;
            case 'new':
                include_once "new_appointment.php";
                break;
            case 'add':
                $animal_name = htmlspecialchars($_POST['animal_name']);
                $breed = htmlspecialchars($_POST['breed']);
                $birth_date = htmlspecialchars($_POST['birth_date']);
                $owner_name = htmlspecialchars($_POST['owner_name']);
                $owner_phone = htmlspecialchars($_POST['owner_phone']);
                $doctor_name = htmlspecialchars($_POST['doctor_name']);
                $specialty = htmlspecialchars($_POST['specialty']);
                $treatment_type = htmlspecialchars($_POST['treatment_type']);
                $treatment_date = htmlspecialchars($_POST['treatment_date']);
                $notes = htmlspecialchars($_POST['notes']);
                $tasksModel->addAppointment($animal_name, $breed, $birth_date, $owner_name, $owner_phone, $doctor_name, $specialty, $treatment_type, $treatment_date, $notes);
                header("Location: index.php");
                break;
        }
        ?>
    </div>
</body>

</html>
