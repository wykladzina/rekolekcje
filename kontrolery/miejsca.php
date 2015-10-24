<?php

class miejsca {
  function dzialaj($smarty, $serwis) {
    $miejsca = $serwis->daj_miejsca();
    $smarty->assign('miejsca', $miejsca);
    $smarty->display('miejsca.tpl');
  }
}
