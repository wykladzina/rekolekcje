<h2>nadchodzące wydarzenia</h2>
{foreach from=$najnowsze_wydarzenia item=wydarzenie}
  <a href="#">{$wydarzenie->get_nazwa_wydarzenia()} <i>{$wydarzenie->get_data_wydarzenia()}</i></a><br>
{/foreach}
