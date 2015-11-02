<?php

namespace kontrolery;

class dodaj_wydarzenie extends Akcja {

  function daj_url_przekierowania() {
    return '?kontroler=nowe_wydarzenie';
  }

  function rob($serwis) {
    $miejsce = new \Miejsce($_POST);
    $organizator = new \Organizator($_POST);
    $wydarzenie = new \Wydarzenie($_POST);
    $wydarzenie->set_miejsce($miejsce);
    $wydarzenie->set_organizator($organizator);
    $serwis->stworz_miejsce($miejsce);
    $serwis->stworz_organizatora($organizator);
    $serwis->stworz_wydarzenie($wydarzenie);
  }

}
