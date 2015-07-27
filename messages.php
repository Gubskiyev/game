<?php
if(isset($_GET['tid']) && isset($_GET['fid'])) {
    require_once "model/forum_class.php";

    $forum = new Forum();
    $tid = $_GET['tid'];
    $fid = $_GET['fid'];
    $messages = $forum->getMessagesOnID($tid);

    require_once "view/messages.php";

}elseif(isset($_POST['text'])) {
    require_once "model/forum_class.php";

    $forum = new Forum();
    $tid = $_POST['tid'];
    $fid = $_POST['fid'];
    $text = $_POST['text'];
    //var_dump($_POST);die;
    $newMessage = $forum->newMessage($fid,$tid,$text);

    $messages = $forum->getMessagesOnID($tid);
    require_once "view/messages-complete.php";
}else{
    header("Location: forum.php");
}
