<form method="post" action=".">
  <input type="hidden" name="kontroler" value="dodaj_organizatora">

  <legend>dodaj organizatora</legend>

  <div class="form-group">
    <label for="nazwa_organizatora">nazwa:</label>
    <input id="nazwa_organizatora" name="nazwa_organizatora" class="form-control" type="text">
  </div>

  <div class="form-group">
    <label for="adres_organizatora">adres:</label>
    <textarea class="form-control" id="adres_organizatora" name="adres_organizatora"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">zapisz tego organizatora</button>
</form>
