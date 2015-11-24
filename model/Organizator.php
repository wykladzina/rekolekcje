<?php
class Organizator {
  public $id_organizatora;
  public $nazwa_organizatora;
  public $domyslna_osoba_do_kontaktu_organizatora;
  public $domyslny_telefon_organizatora;
  public $domyslny_adres_email_organizatora;
  public $domyslny_url_organizatora;

  function __construct($arguments) {
    if (isset($arguments['id_organizatora'])) {
      $this->id_organizatora = $arguments['id_organizatora'];
    }
    $this->nazwa_organizatora = $arguments['nazwa_organizatora'];
    $this->domyslna_osoba_do_kontaktu_organizatora = $arguments['domyslna_osoba_do_kontaktu_organizatora'];
    $this->domyslny_telefon_organizatora = $arguments['domyslny_telefon_organizatora'];
    $this->domyslny_adres_email_organizatora = $arguments['domyslny_adres_email_organizatora'];
    $this->domyslny_url_organizatora = $arguments['domyslny_url_organizatora'];
  }

  static function create_array($argumentss) {
    $organizatorzy = array();
    foreach ($argumentss as $arguments) {
      $organizatorzy[] = new Organizator($arguments);
    }
    return $organizatorzy;
  }


}
