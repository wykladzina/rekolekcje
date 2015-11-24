{extends file='matka.tpl'}

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
      <td>{$organizator->nazwa_organizatora}</td>
    </tr>
    {/foreach}
  </tbody>
</table>

{include file='kawalki/formularz_nowego_organizatora.tpl'}

{/block}
