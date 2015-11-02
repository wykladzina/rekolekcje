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
    // Jak na serwerze będę miał PHP w wersji przynajmniej 5.5, będzie można przywrócić static::class
    #$krotka_nazwa_klasy = str_replace('kontrolery\\', '', static::class);
    $krotka_nazwa_klasy = str_replace('kontrolery\\', '', get_class($this));
    $smarty->assign('kontroler', $krotka_nazwa_klasy);
    $smarty->assign('najnowsze_wydarzenia', $serwis->daj_najnowsze_wydarzenia());
    $smarty->display("{$krotka_nazwa_klasy}.tpl");
  }
}

?>
