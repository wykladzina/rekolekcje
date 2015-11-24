insert into organizatorzy (
  nazwa_organizatora,
  domyslna_osoba_do_kontaktu_organizatora,
  domyslny_telefon_organizatora,
  domyslny_adres_email_organizatora,
  domyslny_url_organizatora
) values (
  'pewien organizator',
  'Jan Kowalski',
  '555-666-777',
  'jkowalski@aaa.pl',
  'http://kuku.pl'
);

insert into miejsca (nazwa_miejsca, adres_miejsca, domyslne_warunki_zakwaterowania_miejsca) values ('pierwsze miejsce', 'ul. Miła 2
00-975 Warszawa', 'zakwaterowanie w domkach kempingowych');

insert into wydarzenia (
  nazwa_wydarzenia,
  prowadzacy_wydarzenia,
  data_wydarzenia,
  opis_wydarzenia,
  informacje_organizacyjne_wydarzenia,
  cel_wydarzenia,
  adresat_wydarzenia,
  oplaty_wydarzenia,
  id_organizatora,
  osoba_do_kontaktu_organizatora,
  telefon_organizatora,
  adres_email_organizatora,
  url_organizatora,
  id_miejsca,
  warunki_zakwaterowania_miejsca
) values (
  'jakieś wydarzenie',
  'Stefan Morela',
  '2011-12-13',
  'opis, opis, tralala',
  'przyjechać z własną poduszką',
  'jakiś cel',
  'wydarzenie adresowane do kobiet i mężczyzn',
  '200 zł',
  1,
  'Mirek Bombowski',
  '121-111-222',
  'm@mmm.pl',
  'http://aaa.pl',
  1,
  'zakwaterowanie w pokojach dwuosobowych z łazienką'
);
