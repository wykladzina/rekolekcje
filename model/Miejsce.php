<?php
class Miejsce {
  private $id_miejsca;
  private $nazwa_miejsca;
  private $adres_miejsca;

  function __construct($arguments) {
    if (isset($arguments['id_miejsca'])) {
      $this->set_id_miejsca($arguments['id_miejsca']);
    }
    $this->set_nazwa_miejsca($arguments['nazwa_miejsca']);
    $this->set_adres_miejsca($arguments['adres_miejsca']);
  }

  static function create_array($argumentss) {
    $miejsca = array();
    foreach ($argumentss as $arguments) {
      $miejsca[] = new Miejsce($arguments);
    }
    return $miejsca;
  }

  function __toString() {
    return "Miejsce: {$this->id_miejsca} {$this->nazwa_miejsca} {$this->adres_miejsca}";
  }

  function get_id_miejsca() {
    return $this->id_miejsca;
  }

  function get_nazwa_miejsca() {
    return $this->nazwa_miejsca;
  }

  function get_adres_miejsca() {
    return $this->adres_miejsca;
  }

  function set_id_miejsca($id_miejsca) {
    $this->id_miejsca = $id_miejsca;
  }

  function set_nazwa_miejsca($nazwa_miejsca) {
    $this->nazwa_miejsca = $nazwa_miejsca;
  }

  function set_adres_miejsca($adres_miejsca) {
    $this->adres_miejsca = $adres_miejsca;
  }
}
