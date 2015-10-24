{extends file='matka.tpl'}

{block name=boczek}
  {include file='kawalki/formularz_nowego_organizatora.php'}
{/block}

{block name=tresc}

<table class='table'>
  <thead>
    <tr>
      <th>nazwa organizatora</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$organizatorzy item=organizator}
    <tr>
      <td>{$organizator->get_nazwa_organizatora()}</td>
    </tr>
    {/foreach}
  </tbody>
</table>

{/block}
