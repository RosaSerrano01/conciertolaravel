<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4 position-relative">
<label for="validationTooltip01" class="form-label">Nombre:</label>
<input type="text" class="form-control" id="validationTooltip01" name="name" value="{{ isset($cantante->name )?$cantante->name:'' }}" required>
<div class="invalid-tooltip">
      ¡Ingrese su nombre!
    </div>
    </div>
    <br>

<div class="col-md-4 position-relative">
<label for="validationTooltip02" class="form-label">Apellido:</label>
<input type="text" name="lastName" class="form-control" id="validationTooltip02" value="{{ isset($cantante->lastName )?$cantante->lastName:'' }}" required>
<div class="valid-tooltip">
      ¡Ingrese su apellido!
    </div>
  </div>
  <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip03" class="form-label">Nombre Artístico:</label>
<input type="text" name="artisticname" class="form-control" id="validationTooltip03" value="{{ isset ($cantante->artisticname)?$cantante->artisticname:''}}" required>
<div class="valid-tooltip">
      ¡Ingrese su nombre artístico!
    </div>
  </div>
  <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip04" class="form-label">Edad:</label>
<input type="number" name="age" class="form-control" id="validationTooltip04" value="{{ isset($cantante->age )?$cantante->age:'' }}" required>
<div class="valid-tooltip">
      ¡Ingrese su edad!
    </div>
  </div>
  <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip05" class="form-label">Género de Música:</label>
<input type="text" name="musicGenre" class="form-control" id="validationTooltip05" value="{{ isset($cantante->musicGenre )?$cantante->musicGenre:'' }}" required>
<div class="valid-tooltip">
      ¡Ingrese su género de música!
    </div>
  </div>
<br><br>

<button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>
