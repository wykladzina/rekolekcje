<?php

namespace kontrolery;

class dodaj_miejsce extends Akcja {

  function daj_url_przekierowania() {
    return '?kontroler=miejsca';
  }

  function rob($serwis) {
    $miejsce = new \Miejsce($_POST);
    $serwis->stworz_miejsce($miejsce);
  }

}
