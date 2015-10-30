<?php

class nowe_wydarzenie {
  function dzialaj($smarty, $serwis) {
    $smarty->assign('najnowsze_wydarzenia', $serwis->daj_najnowsze_wydarzenia());
    $smarty->display('nowe_wydarzenie.tpl');
  }
}
