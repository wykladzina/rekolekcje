<?php

namespace kontrolery;

class start {
  function dzialaj($smarty, $serwis) {
    $wydarzenia = $serwis->daj_wydarzenia();
    $smarty->assign('wydarzenia', $wydarzenia);
    $smarty->assign('najnowsze_wydarzenia', $serwis->daj_najnowsze_wydarzenia());
    $smarty->display('start.tpl');
  }
}
