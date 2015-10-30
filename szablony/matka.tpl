<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{block name=tytul}rekolekcje{/block}</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <script src='jquery/jquery.min.js'></script>
    <script src='webshim/minified/polyfiller.js'></script>
    <script>
      $.webshims.polyfill('forms-ext');
      webshim.activeLang('pl');
    </script>
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

    <div class="row">
  		<div class="col-md-12">
        {include file='kawalki/nawigacja.tpl'}
  		</div>
  	</div>

    <div class="row">
  		<div class="col-md-4">
        <div class="container-fluid">{block name=boczek}{/block}</div>
  		</div>
  		<div class="col-md-8">
        <div class="container-fluid">{block name=tresc}{/block}</div>
  		</div>
  	</div>
  </body>
</html>
