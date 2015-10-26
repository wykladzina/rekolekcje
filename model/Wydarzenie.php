<?php
class Wydarzenie {
  private $nazwa_wydarzenia;
  private $data_wydarzenia;
  private $opis_wydarzenia;

  function __construct($arguments) {
    $this->set_nazwa_wydarzenia($arguments['nazwa_wydarzenia']);
    $this->set_data_wydarzenia($arguments['data_wydarzenia']);
    $this->set_opis_wydarzenia($arguments['opis_wydarzenia']);
  }

  static function create_array($argumentss) {
    $wydarzenia = array();
    foreach ($argumentss as $arguments) {
      $wydarzenia[] = new Wydarzenie($arguments);
    }
    return $wydarzenia;
  }

  function __toString() {
    return "Wydarzenie: {$this->nazwa_wydarzenia} {$this->data_wydarzenia} {$this->opis_wydarzenia}";
  }

  function get_nazwa_wydarzenia() {
    return $this->nazwa_wydarzenia;
  }

  function get_data_wydarzenia() {
    return $this->data_wydarzenia;
  }

  function get_opis_wydarzenia() {
    return $this->opis_wydarzenia;
  }

  function set_nazwa_wydarzenia($nazwa_wydarzenia) {
    $this->nazwa_wydarzenia = $nazwa_wydarzenia;
  }

  function set_data_wydarzenia($data_wydarzenia) {
    $this->data_wydarzenia = $data_wydarzenia;
  }

  function set_opis_wydarzenia($opis_wydarzenia) {
    $this->opis_wydarzenia = $opis_wydarzenia;
  }
}
