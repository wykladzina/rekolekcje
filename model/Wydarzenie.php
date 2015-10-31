<?php
class Wydarzenie {
  private $nazwa_wydarzenia;
  private $data_wydarzenia;
  private $opis_wydarzenia;
  private $miejsce;
  private $organizator;

  function __construct($arguments) {
    if (isset($arguments['id_wydarzenia'])) {
      $this->set_id_wydarzenia($arguments['id_wydarzenia']);
    }
    $this->set_nazwa_wydarzenia($arguments['nazwa_wydarzenia']);
    $this->set_data_wydarzenia($arguments['data_wydarzenia']);
    $this->set_opis_wydarzenia($arguments['opis_wydarzenia']);
  }

  static function create_with_children($arguments) {
    $miejsce = new Miejsce($arguments);
    $organizator = new Organizator($arguments);
    $wydarzenie = new Wydarzenie($arguments);
    $wydarzenie->set_miejsce($miejsce);
    $wydarzenie->set_organizator($organizator);
    return $wydarzenie;
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

  function get_id_wydarzenia() {
    return $this->id_wydarzenia;
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

  function get_miejsce() {
    return $this->miejsce;
  }

  function get_organizator() {
    return $this->organizator;
  }

  function set_id_wydarzenia($id_wydarzenia) {
    $this->id_wydarzenia = $id_wydarzenia;
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

  function set_miejsce($miejsce) {
    $this->miejsce = $miejsce;
  }

  function set_organizator($organizator) {
    $this->organizator = $organizator;
  }

}
