<!DOCTYPE html>

<ul class="list-group">

{foreach from=$tasks item=task}
  <li class="list-group-item">
    {if $task['done']}
      <s>{$task['title']|truncate:8|upper} : {$task['description']}</s>
    {else}
      {$task['title']|truncate:8|upper} : {$task['description']}
    {/if}
    <a href="deleteTask/{$task['id_task']}"><i class="fas fa-trash"></i></a>
  </li>
{/foreach}

</ul>
