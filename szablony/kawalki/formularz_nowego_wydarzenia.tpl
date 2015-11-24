<form method="post" action=".">
  <input type="hidden" name="kontroler" value="dodaj_wydarzenie">

  <legend>dodaj wydarzenie</legend>

  <div class="form-group">
    <label for="nazwa_wydarzenia">nazwa rekolekcji, wydarzenia *:</label>
    <input id="nazwa_wydarzenia" name="nazwa_wydarzenia" class="form-control" type="text">
  </div>

  <div class="form-group">
    <label for="prowadzacy_wydarzenia">prowadzący *:</label>
    <span class="help-block">organizator wydarzenia, kto prowadzi rekolekcje (imiona, nazwiska)</span>
    <input id="prowadzacy_wydarzenia" name="prowadzacy_wydarzenia" class="form-control" type="text">
  </div>

  <div class="form-group">
    <label for="opis_wydarzenia">krótki opis rekolekcji *:</label>
    <span class="help-block">do kogo są skierowane, jaka będzie tematyka, forma rekolekcji (medytacyjne, warsztaty, lectio divina, milczenie). Maksymalnie 500 znaków.</span>
    <input id="opis_wydarzenia" name="opis_wydarzenia" class="form-control" type="text">
  </div>

  <div class="form-group">
    <label for="cel_wydarzenia">cel rekolekcji *:</label>
    <span class="help-block">np. praca nad zranieniami, rozwój duchowy, odbudowanie wiary, szkolenie biblijne</span>
    <input id="cel_wydarzenia" name="cel_wydarzenia" class="form-control" type="text">
  </div>

  <div class="form-group">
    <label for="adresat_wydarzenia">do kogo są skierowane rekolekcje *:</label>
    <span class="help-block">np. młodzież (dziewczęta/chłopcy), dorośli, nauczyciele, ludzie biznesu, ojcowie, kapłani</span>
    <input id="adresat_wydarzenia" name="adresat_wydarzenia" class="form-control" type="text">
  </div>

  <div class="form-group">
    <label for="data_wydarzenia">termin *:</label>
    <span class="help-block">wydarzenia tylko w zakresie dat: od 1.10.2014 do 31.08.2015</span>
    <input id="data_wydarzenia" name="data_wydarzenia" class="form-control" type="date">
  </div>

  <div class="form-group">
    <label for="nazwa_miejsca">miejsce *:</label>
    <input id="nazwa_miejsca" name="nazwa_miejsca" class="form-control" type="text">
  </div>

  <div class="form-group">
    <label for="adres_miejsca">adres *:</label>
    <textarea class="form-control" id="adres_miejsca" name="adres_miejsca"></textarea>
  </div>

  <div class="form-group">
    <label for="warunki_zakwaterowania_miejsca">warunki zakwaterowania *:</label>
    <span class="help-block">krótki opis obiektu (np. ośrodek rekolekcyjny, centrum konferencyjno-rekolekcyjne)</span>
    <input id="warunki_zakwaterowania_miejsca" name="warunki_zakwaterowania_miejsca" class="form-control" type="text">
  </div>

  <div class="form-group">
    <label for="oplaty_wydarzenia">opłaty *:</label>
    <span class="help-block">stawka za całość (ewentualnie informacja o możliwości pokrycia części kosztów, wiele osób nie zdaje sobie sprawy, że brak pieniędzy nie musi być przeszkodą)</span>
    <input id="oplaty_wydarzenia" name="oplaty_wydarzenia" class="form-control" type="text">
  </div>

  <div class="form-group">
    <label for="nazwa_organizatora">organizator *:</label>
    <span class="help-block">wspólnota, zakon, stowarzyszenie, parafia</span>
    <input id="nazwa_organizatora" name="nazwa_organizatora" class="form-control" type="text">
  </div>

  <div class="form-group">
    <label for="osoba_do_kontaktu_organizatora">osoba do kontaktu *:</label>
    <span class="help-block">imię i nazwisko koordynatora rekolekcji (wydarzenia)</span>
    <input id="osoba_do_kontaktu_organizatora" name="osoba_do_kontaktu_organizatora" class="form-control" type="text">
  </div>

  <div class="form-group">
    <label for="telefon_organizatora">telefon *:</label>
    <input id="telefon_organizatora" name="telefon_organizatora" class="form-control" type="text">
  </div>

  <div class="form-group">
    <label for="adres_email_organizatora">email *:</label>
    <input id="adres_email_organizatora" name="adres_email_organizatora" class="form-control" type="text">
  </div>

  <div class="form-group">
    <label for="url_organizatora">strona WWW *:</label>
    <input id="url_organizatora" name="url_organizatora" class="form-control" type="text">
  </div>

  <div class="form-group">
    <label for="informacje_organizacyjne_wydarzenia">inne informacje *:</label>
    <input id="informacje_organizacyjne_wydarzenia" name="informacje_organizacyjne_wydarzenia" class="form-control" type="text">
  </div>

  <button type="submit" class="btn btn-primary">zapisz to wydarzenie</button>
</form>
