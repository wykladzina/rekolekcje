insert into organizatorzy (nazwa_organizatora, adres_organizatora) values ('pewien organizator', 'ul. Kwiatowa 3/15
00-123 Gliwice');
insert into organizatorzy (nazwa_organizatora, adres_organizatora) values ('inny organizator', 'ul. Polna 4a
00-012 Warszawa');
insert into organizatorzy (nazwa_organizatora, adres_organizatora) values ('trzeci organizator', 'ul. Miętowa 4
15-115 Radom');
insert into organizatorzy (nazwa_organizatora, adres_organizatora) values ('taki sobie organizator', 'ul. Ogrodowa 1/3
11-999 Gdańsk');

insert into miejsca (nazwa_miejsca, adres_miejsca) values ('pierwsze miejsce', 'ul. Miła 2
00-975 Warszawa');
insert into miejsca (nazwa_miejsca, adres_miejsca) values ('drugie miejsce', 'ul. Żytnia 3/5
01-342 Warszawa');
insert into miejsca (nazwa_miejsca, adres_miejsca) values ('trzecie miejsce', 'ul. Miloszewicza 19
99-085 Grabowo');

insert into wydarzenia (nazwa_wydarzenia, data_wydarzenia, opis_wydarzenia, id_organizatora, id_miejsca)
values ('jakieś wydarzenie', '2015-10-24', 'to jest opis wydarzenia', 1, 1);
insert into wydarzenia (nazwa_wydarzenia, data_wydarzenia, opis_wydarzenia, id_organizatora, id_miejsca)
values ('inne wydarzenie', '2011-07-30', 'to jest opis wydarzenia', 2, 3);
insert into wydarzenia (nazwa_wydarzenia, data_wydarzenia, opis_wydarzenia, id_organizatora, id_miejsca)
values ('kolejne wydarzenie', '2016-01-05', 'to jest opis wydarzenia', 4, 3);
