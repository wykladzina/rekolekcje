<h4>nadchodzące wydarzenia</h4>
{foreach from=$najnowsze_wydarzenia item=wydarzenie}
  <a href="?kontroler=wydarzenie&amp;id_wydarzenia={$wydarzenie->get_id_wydarzenia()}">{$wydarzenie->get_nazwa_wydarzenia()} <i>{$wydarzenie->get_data_wydarzenia()}</i></a><br>
{/foreach}
