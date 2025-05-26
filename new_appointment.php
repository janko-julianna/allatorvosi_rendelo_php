<h2>Új időpont hozzáadása</h2>
<form method="POST" action="?action=add">
  <div class="mb-3">
    <label for="pet_name" class="form-label">Kedvenc neve</label>
    <input type="text" class="form-control" id="pet_name" name="pet_name" required>
  </div>
  <div class="mb-3">
    <label for="owner_name" class="form-label">Gazdi neve</label>
    <input type="text" class="form-control" id="owner_name" name="owner_name" required>
  </div>
  <div class="mb-3">
    <label for="appointment_date" class="form-label">Időpont dátuma</label>
    <input type="date" class="form-control" id="appointment_date" name="appointment_date" required>
  </div>
  <div class="mb-3">
    <label for="appointment_time" class="form-label">Időpont ideje</label>
    <input type="time" class="form-control" id="appointment_time" name="appointment_time" required>
  </div>
  <button type="submit" class="btn btn-primary">Időpont hozzáadása</button>
</form>

