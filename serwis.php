<?php
class Serwis {
  private $polaczenie;
  function __construct($polaczenie) {
    $this->polaczenie = $polaczenie;
  }
  function daj_organizatorow() {
    return Organizator::create_array(pg_fetch_all(pg_query("select * from organizatorzy")));
  }
  function stworz_organizatora($miejsce) {
    pg_query_params(
      $this->polaczenie,
      "insert into organizatorzy (nazwa_organizatora, adres_organizatora) values ($1, $2)",
      array($miejsce->get_nazwa_organizatora(), $miejsce->get_adres_organizatora())
    );
  }
  function daj_miejsca() {
    return Miejsce::create_array(pg_fetch_all(pg_query("select * from miejsca")));
  }
  function stworz_miejsce($miejsce) {
    pg_query_params(
      $this->polaczenie,
      "insert into miejsca (nazwa_miejsca, adres_miejsca) values ($1, $2)",
      array($miejsce->get_nazwa_miejsca(), $miejsce->get_adres_miejsca())
    );
  }
  function daj_wydarzenia() {
    return pg_fetch_all(pg_query("select * from wydarzenia natural join organizatorzy natural join miejsca"));
  }
  function stworz_wydarzenie($wydarzenie) {
    pg_query("insert into wydarzenia (nazwa_wydarzenia, data_wydarzenia, opis_wydarzenia, id_organizatora, id_miejsca) values ('$wydarzenie->nazwa_wydarzenia', '$wydarzenie->data_wydarzenia', '$wydarzenie->opis_wydarzenia', '$id_organizatora', '$id_miejsca')");
  }
}
