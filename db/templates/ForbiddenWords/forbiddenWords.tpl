<!DOCTYPE html>

<ul class="list-group">

{foreach from=$forbiddenWords item=word}
  <li class="list-group-item">
    {$word['word']}
    <a href="deleteForbiddenWord/{$word['id_word']}"><i class="fas fa-trash"></i></a>
  </li>
{/foreach}

</ul>
