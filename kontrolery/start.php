<?php

class start {
  function dzialaj($smarty, $serwis) {
    $wydarzenia = $serwis->daj_wydarzenia();
    $smarty->assign('wydarzenia', $wydarzenia);
    $smarty->display('start.tpl');
  }
}
