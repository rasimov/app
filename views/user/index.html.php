<b>List of registered users</b>
<table>
<?php foreach ($users as $user): ?>
    <tr>
        <td><?=$user->username ?></td>
        <td><?=$user->Password ?></td>
    </tr>
   

<?php endforeach; ?>
    
</table>
<a href="/midnight/logout">Logout</a>