<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форум :: <?php ?></title>
</head>
<body>

<table border="1" width="100%">

    <tr>
        <th align="center" width="10%">Автор</th>
        <th align="center" width="90%">Тема: <?php echo $message['title_message']; ?></th>

    </tr>
    <?php foreach($messages as $message):  ;?>
        <tr>
            <td></td>
            <td><?php echo $message['text']; ?></td>
        </tr>
    <?php endforeach; ?>
    <?php  ?>
</table>

<table border="1" align="center">
    <form action="messages.php" method="post">
        <input type=hidden name=fid value=<?=$_GET['fid']?>>
        <input type=hidden name=tid value=<?=$_GET['tid']?>>
        <tr><th>Новое сообщение:</th></tr>
        <tr><td><textarea name="text" cols="60" rows="10"></textarea></td></tr>
        <tr><td align="center"><input type="submit" name="submit>"</td></tr>
    </form>
</table>
</body>
</html>