<form method="post" action=".">
  <input type="hidden" name="kontroler" value="dodaj_miejsce">

  <legend>dodaj miejsce</legend>

  <div class="form-group">
    <label for="nazwa_miejsca">nazwa:</label>
    <input id="nazwa_miejsca" name="nazwa_miejsca" class="form-control" type="text">
  </div>

  <div class="form-group">
    <label for="adres_miejsca">adres:</label>
    <textarea class="form-control" id="adres_miejsca" name="adres_miejsca"></textarea>
  </div>

  <div class="form-group">
    <label for="domyslne_warunki_zakwaterowania_miejsca">warunki zakwaterowania:</label>
    <textarea class="form-control" id="domyslne_warunki_zakwaterowania_miejsca" name="domyslne_warunki_zakwaterowania_miejsca"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">zapisz to miejsce</button>
</form>
