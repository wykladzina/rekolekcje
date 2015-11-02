<?php
require '../vendor/autoload.php';
require '../rozne_przydatne_funkcje.php';

spl_autoload_register(function ($klasa) {
  $klasa = str_replace('\\', '/', $klasa);
  include_if_exists("../$klasa.php");
  include_if_exists("../model/$klasa.php");
});

require '../serwis.php';
$serwis = new Serwis(pg_connect('user=rekolekcje dbname=rekolekcje password=koRelacJe'));

$kontroler = 'start';
if (isset($_REQUEST['kontroler'])) {
  $kontroler = $_REQUEST['kontroler'];
}
$klasa_kontrolera = "\\kontrolery\\$kontroler";
(new $klasa_kontrolera())->dzialaj($serwis);
?>
