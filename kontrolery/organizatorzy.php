<?php

namespace kontrolery;

class organizatorzy {
  function dzialaj($smarty, $serwis) {
    $organizatorzy = $serwis->daj_organizatorow();
    $smarty->assign('organizatorzy', $organizatorzy);
    $smarty->display('organizatorzy.tpl');
  }
}
