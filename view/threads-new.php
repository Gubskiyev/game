<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форум</title>
</head>
<body>


<a href="forum.php">Форумы</a> >>
<?php foreach($items as $item):  ;?>
<?php echo $item['title']; ?>
<?php endforeach; ?>
<table border="1" align="center" width="500">
    <form action="threads-new.php" method="post" name="postform">
    <input type=hidden name=fid value=<?=$_GET['fid']?>>
        <tr>
            <th colspan="2" align="left">Новая тема</th>
        </tr>
        <tr>
            <td>Автор:</td>
            <td><?php ?></td>
        </tr>
        <tr>
            <td>Тема сообщения:</td>
            <td><input type="text" name="title" size="58"> </td>
        </tr>
        <tr>
            <td>Текст сообщения:</td>
            <td><textarea name="text" cols="60" rows="10"></textarea></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="submit" value="Отправить сообщение">
            </td>
        </tr>
    </form>
</table>
</body>
</html>