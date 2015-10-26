{extends file='matka.tpl'}

{block name=boczek}
  {include file='kawalki/formularz_nowego_wydarzenia.php'}
{/block}

{block name=tresc}

<table class='table'>
  <thead>
    <tr>
      <th>nazwa wydarzenia</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$wydarzenia item=wydarzenie}
    <tr>
      <td>{$wydarzenie->get_nazwa_wydarzenia()}</td>
    </tr>
    {/foreach}
  </tbody>
</table>

{/block}
