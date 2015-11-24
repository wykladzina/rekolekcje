{extends file='matka.tpl'}

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
      <td>{$wydarzenie->nazwa_wydarzenia}</td>
    </tr>
    {/foreach}
  </tbody>
</table>

{/block}
