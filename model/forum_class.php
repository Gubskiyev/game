<?php
require_once "db_class.php";

class Forum {
    public $db;

    public function __construct() {
        $this->db = new DataBase();
    }

    public function getAllThread() {
        return $this->db->querySel("SELECT * FROM `threads` ORDER BY id_thread");
    }

    public function getThreadTitle($id) {
        return $this->db->querySel("SELECT * FROM `threads` WHERE id_thread = '".$id."'");
    }

    public function getThreadsOnID($id) {
        return $this->db->querySel("SELECT * FROM `messages` WHERE num_thread = '".$id."' AND type = 'topic'  ORDER BY id_message");
    }

    public function getMessageTitle($id) {
        return $this->db->querySel("SELECT * FROM `messages` WHERE id_message = '".$id."'");
    }

    public function getMessagesOnID($id) {
        return $this->db->querySel("SELECT * FROM `messages` WHERE id_message = '".$id."' OR num_message = '".$id."' ORDER BY id_message");
    }

    public function getMessagesThreadOnID($id) {
        return $this->db->querySel("SELECT * FROM `messages` WHERE id_message = '".$id."' OR num_message = '".$id."' ORDER BY id_message DESC");
    }

    public function newMessage($fid,$tid,$text) {
        $this->db->queryIns("INSERT INTO `messages` (`type`,`num_thread`,`num_message`,`title_message`,`text`) VALUES ('message','".$fid."','".$tid."','','".$text."')");
    }

    public function newThread($fid,$title,$text) {
        $this->db->queryIns("INSERT INTO `messages` (`type`,`num_thread`,`num_message`,`title_message`,`text`) VALUES ('topic','".$fid."','0','".$title."','".$text."')");
    }
}