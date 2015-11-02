<?php

namespace kontrolery;

class wydarzenie extends Widok {
  function daj_dane($serwis) {
    return [
      'najnowsze_wydarzenia' => $serwis->daj_najnowsze_wydarzenia(),
      'wydarzenie' => $serwis->daj_wydarzenie($_GET['id_wydarzenia'])
    ];
  }
}
