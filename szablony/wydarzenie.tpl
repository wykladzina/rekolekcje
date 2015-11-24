{extends file='matka.tpl'}

{block name=tresc}

  <h4>{$wydarzenie->nazwa_wydarzenia}</h4>
  <ul>
    <li>data: {$wydarzenie->data_wydarzenia}</li>
    <li>opis: {$wydarzenie->opis_wydarzenia}</li>
    <li>prowadzący: {$wydarzenie->prowadzacy_wydarzenia}</li>
    <li>termin: {$wydarzenie->data_wydarzenia}</li>
    <li>dodatkowe informacje: {$wydarzenie->informacje_organizacyjne_wydarzenia}</li>
    <li>cel: {$wydarzenie->cel_wydarzenia}</li>
    <li>adresat: {$wydarzenie->adresat_wydarzenia}</li>
    <li>opłaty: {$wydarzenie->oplaty_wydarzenia}</li>
    <li>organizator: {$wydarzenie->organizator->nazwa_organizatora}</li>
    <li>osoba do kontaktu: {$wydarzenie->osoba_do_kontaktu_organizatora}</li>
    <li>telefon: {$wydarzenie->telefon_organizatora}</li>
    <li>email: {$wydarzenie->adres_email_organizatora}</li>
    <li>strona WWW: {$wydarzenie->url_organizatora}</li>
    <li>miejsce: {$wydarzenie->miejsce->nazwa_miejsca}</li>
    <li>warunki zakwaterowania: {$wydarzenie->warunki_zakwaterowania_miejsca}</li>
  </ul>

{/block}
