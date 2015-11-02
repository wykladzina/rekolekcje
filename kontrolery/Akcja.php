<?php

namespace kontrolery;

abstract class Akcja {
  abstract function daj_url_przekierowania();
  abstract function rob($serwis);

  final function dzialaj($serwis) {
    $this->rob($serwis);
    header("Location: " . $this->daj_url_przekierowania());
  }
}

?>
