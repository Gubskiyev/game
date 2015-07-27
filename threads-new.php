<?php
    require_once "model/forum_class.php";
    $forum = new Forum();
    $id = $_GET['fid'];
    $items = $forum->getThreadtitle($id);

    require_once "view/threads-new.php";

if(isset($_POST['submit'])) {
    require_once "model/forum_class.php";
    $forum = new Forum();
    $title = $_POST['title'];
    $text = $_POST['text'];
    $fid = $_POST['fid'];

    $newThread = $forum->newThread($fid,$title,$text);
    require_once "view/threads-new.php";
}
