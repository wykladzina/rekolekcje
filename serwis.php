<?php
class Serwis {
  private $polaczenie;
  function __construct($polaczenie) {
    $this->polaczenie = $polaczenie;
  }
  function daj_organizatorow() {
    return Organizator::create_array(pg_fetch_all(pg_query("select * from organizatorzy")));
  }
  function stworz_organizatora($organizator) {
    $query_handle = pg_query_params(
      $this->polaczenie,
      "insert into organizatorzy (nazwa_organizatora, adres_organizatora) values ($1, $2) returning id_organizatora",
      array($organizator->get_nazwa_organizatora(), $organizator->get_adres_organizatora())
    );
    $id_organizatora = pg_fetch_assoc($query_handle)['id_organizatora'];
    $organizator->set_id_organizatora($id_organizatora);
  }
  function daj_miejsca() {
    return Miejsce::create_array(pg_fetch_all(pg_query("select * from miejsca")));
  }
  function stworz_miejsce($miejsce) {
    $query_handle = pg_query_params(
      $this->polaczenie,
      "insert into miejsca (nazwa_miejsca, adres_miejsca) values ($1, $2) returning id_miejsca",
      array($miejsce->get_nazwa_miejsca(), $miejsce->get_adres_miejsca())
    );
    $id_miejsca = pg_fetch_assoc($query_handle)['id_miejsca'];
    $miejsce->set_id_miejsca($id_miejsca);
  }
  function daj_wydarzenia() {
    return Wydarzenie::create_array(pg_fetch_all(pg_query("select * from wydarzenia natural join organizatorzy natural join miejsca")));
  }
  function daj_najnowsze_wydarzenia() {
    $zapytanie = "
      select *
      from
        wydarzenia
        natural join organizatorzy
        natural join miejsca
      where data_wydarzenia > current_date
      order by data_wydarzenia
      limit 5";
    return Wydarzenie::create_array(pg_fetch_all(pg_query($zapytanie)));
  }
  function stworz_wydarzenie($wydarzenie) {
    $query_handle = pg_query_params(
      $this->polaczenie,
      "insert into wydarzenia (nazwa_wydarzenia, data_wydarzenia, opis_wydarzenia, id_miejsca, id_organizatora) values ($1, $2, $3, $4, $5) returning id_wydarzenia",
      array(
        $wydarzenie->get_nazwa_wydarzenia(),
        $wydarzenie->get_data_wydarzenia(),
        $wydarzenie->get_opis_wydarzenia(),
        $wydarzenie->get_miejsce()->get_id_miejsca(),
        $wydarzenie->get_organizator()->get_id_organizatora()
      )
    );
    $id_wydarzenia = pg_fetch_assoc($query_handle)['id_wydarzenia'];
    $wydarzenie->set_id_wydarzenia($id_wydarzenia);
  }
}
