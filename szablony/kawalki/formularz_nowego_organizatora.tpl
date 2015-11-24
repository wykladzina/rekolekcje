<form method="post" action=".">
  <input type="hidden" name="kontroler" value="dodaj_organizatora">

  <legend>dodaj organizatora</legend>

  <div class="form-group">
    <label for="nazwa_organizatora">nazwa:</label>
    <input id="nazwa_organizatora" name="nazwa_organizatora" class="form-control" type="text">
  </div>

  <div class="form-group">
    <label for="domyslna_osoba_do_kontaktu_organizatora">osoba do kontaktu:</label>
    <input id="domyslna_osoba_do_kontaktu_organizatora" name="domyslna_osoba_do_kontaktu_organizatora" class="form-control" type="text">
  </div>

  <div class="form-group">
    <label for="domyslny_telefon_organizatora">telefon:</label>
    <input id="domyslny_telefon_organizatora" name="domyslny_telefon_organizatora" class="form-control" type="text">
  </div>

  <div class="form-group">
    <label for="domyslny_adres_email_organizatora">email:</label>
    <input id="domyslny_adres_email_organizatora" name="domyslny_adres_email_organizatora" class="form-control" type="email">
  </div>

  <div class="form-group">
    <label for="domyslny_url_organizatora">strona WWW:</label>
    <input id="domyslny_url_organizatora" name="domyslny_url_organizatora" class="form-control" type="text">
  </div>

  <button type="submit" class="btn btn-primary">zapisz tego organizatora</button>
</form>
