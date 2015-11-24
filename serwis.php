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
      "insert into organizatorzy (
        nazwa_organizatora,
        domyslna_osoba_do_kontaktu_organizatora,
        domyslny_telefon_organizatora,
        domyslny_adres_email_organizatora,
        domyslny_url_organizatora
      ) values ($1, $2, $3, $4, $5) returning id_organizatora",
      array(
        $organizator->nazwa_organizatora,
        $organizator->domyslna_osoba_do_kontaktu_organizatora,
        $organizator->domyslny_telefon_organizatora,
        $organizator->domyslny_adres_email_organizatora,
        $organizator->domyslny_url_organizatora
      )
    );
    $id_organizatora = pg_fetch_assoc($query_handle)['id_organizatora'];
    $organizator->id_organizatora = $id_organizatora;
  }
  function daj_miejsca() {
    return Miejsce::create_array(pg_fetch_all(pg_query("select * from miejsca")));
  }
  function stworz_miejsce($miejsce) {
    $query_handle = pg_query_params(
      $this->polaczenie,
      "insert into miejsca (nazwa_miejsca, adres_miejsca, domyslne_warunki_zakwaterowania_miejsca) values ($1, $2, $3) returning id_miejsca",
      array($miejsce->nazwa_miejsca, $miejsce->adres_miejsca, $miejsce->domyslne_warunki_zakwaterowania_miejsca)
    );
    $id_miejsca = pg_fetch_assoc($query_handle)['id_miejsca'];
    $miejsce->id_miejsca = $id_miejsca;
  }
  function daj_wydarzenia() {
    return Wydarzenie::create_array(pg_fetch_all(pg_query("select * from wydarzenia natural join organizatorzy natural join miejsca")));
  }
  function daj_wydarzenie($id_wydarzenia) {
    $query_handle = pg_query_params(
      "select * from wydarzenia natural join organizatorzy natural join miejsca where id_wydarzenia=$1",
      array($id_wydarzenia)
    );
    return Wydarzenie::create_with_children(pg_fetch_assoc($query_handle));
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
      "insert into wydarzenia (
        nazwa_wydarzenia,
        prowadzacy_wydarzenia,
        data_wydarzenia,
        opis_wydarzenia,
        informacje_organizacyjne_wydarzenia,
        cel_wydarzenia,
        adresat_wydarzenia,
        oplaty_wydarzenia,
        osoba_do_kontaktu_organizatora,
        telefon_organizatora,
        adres_email_organizatora,
        url_organizatora,
        warunki_zakwaterowania_miejsca,
        id_organizatora,
        id_miejsca
      ) values ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15) returning id_wydarzenia",
      array(
        $wydarzenie->nazwa_wydarzenia,
        $wydarzenie->prowadzacy_wydarzenia,
        $wydarzenie->data_wydarzenia,
        $wydarzenie->opis_wydarzenia,
        $wydarzenie->informacje_organizacyjne_wydarzenia,
        $wydarzenie->cel_wydarzenia,
        $wydarzenie->adresat_wydarzenia,
        $wydarzenie->oplaty_wydarzenia,
        $wydarzenie->osoba_do_kontaktu_organizatora,
        $wydarzenie->telefon_organizatora,
        $wydarzenie->adres_email_organizatora,
        $wydarzenie->url_organizatora,
        $wydarzenie->warunki_zakwaterowania_miejsca,
        $wydarzenie->organizator->id_organizatora,
        $wydarzenie->miejsce->id_miejsca
      )
    );
    $id_wydarzenia = pg_fetch_assoc($query_handle)['id_wydarzenia'];
    $wydarzenie->id_wydarzenia = $id_wydarzenia;
  }
}
