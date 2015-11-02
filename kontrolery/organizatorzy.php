<?php

namespace kontrolery;

class organizatorzy extends Widok {
  function daj_dane($serwis) {
    return [
      'organizatorzy' => $serwis->daj_organizatorow()
    ];
  }
}
