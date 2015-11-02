<?php

namespace kontrolery;

class wydarzenie extends Widok {
  function daj_dane($serwis) {
    return [
      'wydarzenie' => $serwis->daj_wydarzenie($_GET['id_wydarzenia'])
    ];
  }
}
