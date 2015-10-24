<?php



class dodaj_wydarzenie {
  function dzialaj($smarty, $serwis) {
    // $wydarzenie = new Wydarzenie(pg_escape_array($_POST));
    // print $wydarzenie;
    $miejsce = new Miejsce($_POST);
    $serwis->stworz_miejsce($miejsce);
    header('Location: .');
  }
}
