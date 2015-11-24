<?php
class Miejsce {
  public $id_miejsca;
  public $nazwa_miejsca;
  public $adres_miejsca;
  public $domyslne_warunki_zakwaterowania_miejsca;

  function __construct($arguments) {
    if (isset($arguments['id_miejsca'])) {
      $this->id_miejsca = $arguments['id_miejsca'];
    }
    $this->nazwa_miejsca = $arguments['nazwa_miejsca'];
    $this->adres_miejsca = $arguments['adres_miejsca'];
    $this->domyslne_warunki_zakwaterowania_miejsca = $arguments['domyslne_warunki_zakwaterowania_miejsca'];
  }

  static function create_array($argumentss) {
    $miejsca = array();
    foreach ($argumentss as $arguments) {
      $miejsca[] = new Miejsce($arguments);
    }
    return $miejsca;
  }

}
