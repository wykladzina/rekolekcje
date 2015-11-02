<?php

namespace kontrolery;

abstract class Widok {
  abstract function daj_dane($serwis);

  final function dzialaj($serwis) {
    $smarty = new \Smarty();
    $smarty->setTemplateDir('../szablony');
    $smarty->setCompileDir('../smarty/templates_c');
    foreach ($this->daj_dane($serwis) as $klucz => $wartosc) {
      $smarty->assign($klucz, $wartosc);
    }
    $krotka_nazwa_klasy = str_replace('kontrolery\\', '', static::class);
    $smarty->assign('kontroler', $krotka_nazwa_klasy);
    $smarty->display("{$krotka_nazwa_klasy}.tpl");
  }
}

?>
