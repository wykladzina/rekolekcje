<?php
class Wydarzenie {
  public $id_wydarzenia;
  public $nazwa_wydarzenia;
  public $prowadzacy_wydarzenia;
  public $data_wydarzenia;
  public $opis_wydarzenia;
  public $informacje_organizacyjne_wydarzenia;
  public $cel_wydarzenia;
  public $adresat_wydarzenia;
  public $oplaty_wydarzenia;
  public $organizator;
  public $osoba_do_kontaktu_organizatora;
  public $telefon_organizatora;
  public $adres_email_organizatora;
  public $url_organizatora;
  public $miejsce;
  public $warunki_zakwaterowania_miejsca;


  function __construct($arguments) {
    if (isset($arguments['id_wydarzenia'])) {
      $this->id_wydarzenia = $arguments['id_wydarzenia'];
    }
    $this->nazwa_wydarzenia = $arguments['nazwa_wydarzenia'];
    $this->prowadzacy_wydarzenia = $arguments['prowadzacy_wydarzenia'];
    $this->data_wydarzenia = $arguments['data_wydarzenia'];
    $this->opis_wydarzenia = $arguments['opis_wydarzenia'];
    $this->informacje_organizacyjne_wydarzenia = $arguments['informacje_organizacyjne_wydarzenia'];
    $this->cel_wydarzenia = $arguments['cel_wydarzenia'];
    $this->adresat_wydarzenia = $arguments['adresat_wydarzenia'];
    $this->oplaty_wydarzenia = $arguments['oplaty_wydarzenia'];
    $this->osoba_do_kontaktu_organizatora = $arguments['osoba_do_kontaktu_organizatora'];
    $this->telefon_organizatora = $arguments['telefon_organizatora'];
    $this->adres_email_organizatora = $arguments['adres_email_organizatora'];
    $this->url_organizatora = $arguments['url_organizatora'];
    $this->warunki_zakwaterowania_miejsca = $arguments['warunki_zakwaterowania_miejsca'];
  }

  static function create_with_children($arguments) {
    $miejsce = new Miejsce($arguments);
    $organizator = new Organizator($arguments);
    $wydarzenie = new Wydarzenie($arguments);
    $wydarzenie->miejsce = $miejsce;
    $wydarzenie->organizator = $organizator;
    return $wydarzenie;
  }

  static function create_array($argumentss) {
    $wydarzenia = array();
    for ($i = 0; $i < count($argumentss); $i++) {
      $wydarzenia[] = new Wydarzenie($argumentss[$i]);
    }
    return $wydarzenia;
  }

}
