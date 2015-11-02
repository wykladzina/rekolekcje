<form method="post" action=".">
  <input type="hidden" name="kontroler" value="dodaj_wydarzenie">

  <legend>dodaj wydarzenie</legend>

  <div class="form-group">
    <label for="nazwa_wydarzenia">nazwa:</label>
    <input id="nazwa_wydarzenia" name="nazwa_wydarzenia" class="form-control" type="text">
  </div>

  <div class="form-group">
    <label for="data_wydarzenia">data:</label>
    <input id="data_wydarzenia" name="data_wydarzenia" class="form-control" type="date">
  </div>

  <div class="form-group">
    <label for="opis_wydarzenia">opis:</label>
    <textarea class="form-control" id="opis_wydarzenia" name="opis_wydarzenia"></textarea>
  </div>

  <div class="panel panel-default">

    <div class="panel-heading">miejsce</div>
    <div class="panel-body">

      <div class="form-group">
        <label for="nazwa_miejsca">nazwa:</label>
        <input id="nazwa_miejsca" name="nazwa_miejsca" class="form-control" type="text">
      </div>

      <div class="form-group">
        <label for="adres_miejsca">adres:</label>
        <textarea class="form-control" id="adres_miejsca" name="adres_miejsca"></textarea>
      </div>

    </div>

  </div>

  <div class="panel panel-default">

    <div class="panel-heading">organizator</div>
    <div class="panel-body">

      <div class="form-group">
        <label for="nazwa_organizatora">nazwa:</label>
        <input id="nazwa_organizatora" name="nazwa_organizatora" class="form-control" type="text">
      </div>

      <div class="form-group">
        <label for="adres_organizatora">adres:</label>
        <textarea class="form-control" id="adres_organizatora" name="adres_organizatora"></textarea>
      </div>

    </div>

  </div>

  <button type="submit" class="btn btn-primary">zapisz to wydarzenie</button>
</form>
