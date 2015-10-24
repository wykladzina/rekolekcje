<?php

class dodaj_miejsce {
  function dzialaj($smarty, $serwis) {
    $miejsce = new Miejsce($_POST);
    $serwis->stworz_miejsce($miejsce);
    header('Location: ?kontroler=miejsca');
  }
}
