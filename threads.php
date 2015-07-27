<?php
if(isset($_GET['fid'])) {
    require_once "model/forum_class.php";
    $forum = new Forum();

    $id = $_GET['fid'];
    $items = $forum->getThreadTitle($id); //Вытаскиваем для пути в форуме
    $threads = $forum->getThreadsOnID($id);

    require_once "view/threads.php";
}else{
    header('Location: forum.php');
}