<?php

namespace kontrolery;

class dodaj_wydarzenie {
  function dzialaj($smarty, $serwis) {
    $miejsce = new Miejsce($_POST);
    $organizator = new Organizator($_POST);
    $wydarzenie = new Wydarzenie($_POST);
    $wydarzenie->set_miejsce($miejsce);
    $wydarzenie->set_organizator($organizator);
    $serwis->stworz_miejsce($miejsce);
    $serwis->stworz_organizatora($organizator);
    $serwis->stworz_wydarzenie($wydarzenie);
    header('Location: ?kontroler=nowe_wydarzenie');
  }
}
