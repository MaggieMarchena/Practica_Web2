<!DOCTYPE html>

<ul class="list-group">

{foreach from=$tasks item=task}
  <li class="list-group-item">
    {if $task['done']}
      <s>{$task['title']} : {$task['description']}</s>
    {else}
      {$task['title']} : {$task['description']}
    {/if}
    <a href="deleteTask/{$task['id_task']}"><i class="fas fa-trash"></i></a>
    <a href="markTaskDone/{$task['id_task']}"><i class="fas fa-check"></i></a>
  </li>
{/foreach}

</ul>
