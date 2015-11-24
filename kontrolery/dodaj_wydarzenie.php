<?php

namespace kontrolery;

class dodaj_wydarzenie extends Akcja {

  function daj_url_przekierowania() {
    return '?kontroler=nowe_wydarzenie';
  }

  function rob($serwis) {
    $miejsce = new \Miejsce([
      'nazwa_miejsca' => $_POST['nazwa_miejsca'],
      'adres_miejsca' => $_POST['adres_miejsca'],
      'domyslne_warunki_zakwaterowania_miejsca' => $_POST['warunki_zakwaterowania_miejsca']
    ]);
    $organizator = new \Organizator([
      'domyslna_osoba_do_kontaktu_organizatora' => $_POST['osoba_do_kontaktu_organizatora'],
      'domyslny_telefon_organizatora' => $_POST['telefon_organizatora'],
      'domyslny_adres_email_organizatora' => $_POST['adres_email_organizatora'],
      'domyslny_url_organizatora' => $_POST['url_organizatora'],
      'nazwa_organizatora' => $_POST['nazwa_organizatora']
    ]);
    $wydarzenie = new \Wydarzenie($_POST);
    $wydarzenie->miejsce = $miejsce;
    $wydarzenie->organizator = $organizator;
    $serwis->stworz_miejsce($miejsce);
    $serwis->stworz_organizatora($organizator);
    $serwis->stworz_wydarzenie($wydarzenie);
  }

}
