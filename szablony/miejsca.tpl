{extends file='matka.tpl'}

{block name=tresc}

<table class='table'>
  <thead>
    <tr>
      <th>nazwa miejsca</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$miejsca item=miejsce}
    <tr>
      <td>{$miejsce->nazwa_miejsca}</td>
    </tr>
    {/foreach}
  </tbody>
</table>

{include file='kawalki/formularz_nowego_miejsca.tpl'}

{/block}
