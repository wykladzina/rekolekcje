<?php
class Organizator {
  private $nazwa_organizatora;
  private $adres_organizatora;

  function __construct($arguments) {
    $this->set_nazwa_organizatora($arguments['nazwa_organizatora']);
    $this->set_adres_organizatora($arguments['adres_organizatora']);
  }

  function __toString() {
    return "Organizator: {$this->nazwa_organizatora} {$this->adres_organizatora}";
  }

  function get_nazwa_organizatora() {
    return $this->nazwa_organizatora;
  }

  function get_adres_organizatora() {
    return $this->adres_organizatora;
  }

  function set_nazwa_organizatora($nazwa_organizatora) {
    $this->nazwa_organizatora = $nazwa_organizatora;
  }

  function set_adres_organizatora($adres_organizatora) {
    $this->adres_organizatora = $adres_organizatora;
  }
}
