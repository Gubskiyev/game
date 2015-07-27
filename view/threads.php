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
<table border="1" width="100%">
    <tr>
        <th align="center" width="60%">Тема</th>
        <th align="center" width="10%">Дата</th>
        <th align="center" width="5%">#</th>
        <th align="center" width="10%">Автор</th>
        <th align="center" width="15%">Последнее сообщение</th>
    </tr>
    <?php ?>
        <?php foreach($threads as $thread):  ;?>
        <tr>
            <td><a href="messages.php?fid=<?=$_GET['fid']?>&amp;tid=<?=$thread['id_message']?>"><?php echo $thread['title_message']; ?></a></td>
            <td><?php  ?></td>
            <td><?php ?></td>
            <td><?php ?></td>
            <td><?php ?></td>
        </tr>
        <?php endforeach; ?>

    <?php  ?>
</table>
    <a href="threads-new.php?fid=<?=$_GET['fid']?>">Новая тема</a>
</body>
</html>