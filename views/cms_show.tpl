<table>
    {foreach from=$result item=oneItem}
       <tr>
            <td>{$oneItem.id}</td>
            <td>{$oneItem.title}</td>
            <td>{$oneItem.content}</td>
            <td><a href="?action=admin&cms_action=edit">edit</a></td>
            <td><a href="?action=admin&cms_action=delete&id={$oneItem.id}">delete</a></td>
       </tr>
       
    {/foreach}
</table>

