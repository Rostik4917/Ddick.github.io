<?php
if(isset($_POST['name']) && isset($_POST['city']) && isset($_POST['email'])){
    $template = '
<table>
    <tr>
        <td>Имя:</td>
        <td>'.$_POST['name'].'</td>
    </tr>
    <tr>
        <td>City:</td>
        <td>'.$_POST['city'].'</td>
    </tr>
    <tr>
        <td>Email:</td>
        <td>'.$_POST['email'].'</td>
    </tr>
</table>
';
file_put_contents('file.html',$template);
};
?>