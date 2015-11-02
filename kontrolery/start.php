<?php

namespace kontrolery;

class start extends Widok {
  function daj_dane($serwis) {
    return [
      'wydarzenia' => $serwis->daj_wydarzenia(),
    ];
  }
}
