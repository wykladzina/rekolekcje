<?php

class dodaj_organizatora {
  function dzialaj($smarty, $serwis) {
    $organizator = new Organizator($_POST);
    $serwis->stworz_organizatora($organizator);
    header('Location: ?kontroler=organizatorzy');
  }
}
