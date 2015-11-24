<h4>nadchodzące wydarzenia</h4>
{foreach from=$najnowsze_wydarzenia item=wydarzenie}
  <a href="?kontroler=wydarzenie&amp;id_wydarzenia={$wydarzenie->id_wydarzenia}">
    {$wydarzenie->nazwa_wydarzenia} <i>{$wydarzenie->data_wydarzenia}</i>
  </a><br>
{/foreach}
