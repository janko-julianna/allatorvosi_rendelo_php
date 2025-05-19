<h2 class="my-3">Új kezelés felvétele</h2>
<form method="POST" action="?todo=add">
    <div class="mb-3">
        <label for="animal_name" class="form-label">Állat neve</label>
        <input type="text" class="form-control" id="animal_name" name="animal_name">
    </div>
    <div class="mb-3">
        <label for="breed" class="form-label">Fajta</label>
        <input type="text" class="form-control" id="breed" name="breed">
    </div>
    <div class="mb-3">
        <label for="birth_date" class="form-label">Születési dátum</label>
        <input type="date" class="form-control" id="birth_date" name="birth_date">
    </div>
    <div class="mb-3">
        <label for="owner_name" class="form-label">Gazda neve</label>
        <input type="text" class="form-control" id="owner_name" name="owner_name">
    </div>
    <div class="mb-3">
        <label for="owner_phone" class="form-label">Gazda telefonszáma</label>
        <input type="text" class="form-control" id="owner_phone" name="owner_phone">
    </div>
    <div class="mb-3">
        <label for="doctor_name" class="form-label">Orvos neve</label>
        <input type="text" class="form-control" id="doctor_name" name="doctor_name">
    </div>
    <div class="mb-3">
        <label for="specialty" class="form-label">Szakterület</label>
        <input type="text" class="form-control" id="specialty" name="specialty">
    </div>
    <div class="mb-3">
        <label for="treatment_type" class="form-label">Kezelet típus</label>
        <input type="text" class="form-control" id="treatment_type" name="treatment_type">
    </div>
    <div class="mb-3">
        <label for="treatment_date" class="form-label">Kezelet dátum</label>
        <input type="date" class="form-control" id="treatment_date" name="treatment_date">
    </div>
    <div class="mb-3">
        <label for="notes" class="form-label">Megjegyzések</label>
        <textarea class="form-control" id="notes" name="notes"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Felvesz</button>
</form>
