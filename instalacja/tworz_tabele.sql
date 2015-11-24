create table organizatorzy (
  id_organizatora serial primary key,
  nazwa_organizatora text,
  domyslna_osoba_do_kontaktu_organizatora text,
  domyslny_telefon_organizatora text,
  domyslny_adres_email_organizatora text,
  domyslny_url_organizatora text
);

create table miejsca (
  id_miejsca serial primary key,
  nazwa_miejsca text,
  adres_miejsca text,
  domyslne_warunki_zakwaterowania_miejsca text
);

create table wydarzenia (
  id_wydarzenia serial primary key,
  nazwa_wydarzenia text,
  prowadzacy_wydarzenia text,
  data_wydarzenia date,
  opis_wydarzenia text,
  informacje_organizacyjne_wydarzenia text,
  cel_wydarzenia text,
  adresat_wydarzenia text,
  oplaty_wydarzenia text,
  id_organizatora integer not null references organizatorzy,
  osoba_do_kontaktu_organizatora text,
  telefon_organizatora text,
  adres_email_organizatora text,
  url_organizatora text,
  id_miejsca integer not null references miejsca,
  warunki_zakwaterowania_miejsca text
);
