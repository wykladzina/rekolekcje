<?php

namespace kontrolery;

class wydarzenie {
  function dzialaj($smarty, $serwis) {
    $wydarzenie = $serwis->daj_wydarzenie($_GET['id_wydarzenia']);
    $smarty->assign('najnowsze_wydarzenia', $serwis->daj_najnowsze_wydarzenia());
    $smarty->assign('wydarzenie', $wydarzenie);
    $smarty->display('wydarzenie.tpl');
  }
}
