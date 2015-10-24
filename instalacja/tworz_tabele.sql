create table organizatorzy (
  id_organizatora serial primary key,
  nazwa_organizatora text,
  adres_organizatora text
);

create table miejsca (
  id_miejsca serial primary key,
  nazwa_miejsca text,
  adres_miejsca text
);

create table wydarzenia (
  id_wydarzenia serial primary key,
  nazwa_wydarzenia text,
  data_wydarzenia date,
  opis_wydarzenia text,
  id_organizatora integer not null references organizatorzy,
  id_miejsca integer not null references miejsca
);

