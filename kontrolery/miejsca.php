<?php

namespace kontrolery;

class miejsca extends Widok {
  function daj_dane($serwis) {
    return [
      'miejsca' => $serwis->daj_miejsca()
    ];
  }
}
