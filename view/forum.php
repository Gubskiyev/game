<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форум</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <th align="center" width="60%">Форум</th>
            <th align="center" width="30%">Последняя тема</th>
            <th align="center" width="10%">Всего</th>
        </tr>
        <?php foreach($threads as $thread):  ;?>
        <tr>
            <td><a href="threads.php?fid=<?php echo $thread['id_thread'];?>"><?php echo $thread['title'];?></a></td>
            <td><?php ?></td>
            <td><?php ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>