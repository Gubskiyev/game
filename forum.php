<?php
require_once "model/forum_class.php";
$forum = new Forum();
$threads = $forum->getAllThread();

require_once "view/forum.php";