<?php

namespace kontrolery;

class dodaj_organizatora extends Akcja {

  function daj_url_przekierowania() {
    return '?kontroler=organizatorzy';
  }

  function rob($serwis) {
    $organizator = new \Organizator($_POST);
    $serwis->stworz_organizatora($organizator);
  }

}
