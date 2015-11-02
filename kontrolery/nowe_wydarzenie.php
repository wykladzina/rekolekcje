<?php

namespace kontrolery;

class nowe_wydarzenie extends Widok {
  function daj_dane($serwis) {
    return [
      'najnowsze_wydarzenia' => $serwis->daj_najnowsze_wydarzenia()
    ];
  }
}
