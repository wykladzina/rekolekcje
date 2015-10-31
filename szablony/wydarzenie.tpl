{extends file='matka.tpl'}

{block name=boczek}
  {include file='kawalki/najnowsze_wydarzenia.tpl'}
{/block}

{block name=tresc}

  <h4>{$wydarzenie->get_nazwa_wydarzenia()}</h4>
  <i>{$wydarzenie->get_data_wydarzenia()}</i>
  <div>
    {$wydarzenie->get_opis_wydarzenia()}
  </div>

  <h4>miejsce</h5>
  {$wydarzenie->get_miejsce()->get_nazwa_miejsca()}
  <p>
    {$wydarzenie->get_miejsce()->get_adres_miejsca()}
  </p>

  <h4>organizator</h5>
  {$wydarzenie->get_organizator()->get_nazwa_organizatora()}
  <p>
    {$wydarzenie->get_organizator()->get_adres_organizatora()}
  </p>

{/block}
