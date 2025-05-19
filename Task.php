<?php
class Animal {
    function __construct(public $id, public $name, public $breed, public $birth_date, public $owner_id) {}
}

class Owner {
    function __construct(public $id, public $name, public $phone, public $email) {}
}

class Doctor {
    function __construct(public $id, public $name, public $specialty) {}
}

class Treatment {
    function __construct(public $id, public $animal_id, public $doctor_id, public $treatment_date, public $treatment_type, public $notes) {}
}
?>
