<?php
require_once "config_class.php";
class DataBase {
    public $config;
    public $mysqli;

    public function __construct() {
        $this->config = new Config();
        $this->mysqli = new mysqli($this->config->dbhost, $this->config->dbuser, $this->config->dbpass, $this->config->dbname);
        $this->mysqli->set_charset('utf8');
    }

    public function querySel($query) {
        $data = $this->mysqli->query($query);
        $ret = [];
        while($row = mysqli_fetch_assoc($data)) {
            $ret[] = $row;
        }
        //var_dump($data);die;
        return $ret;
    }

    public function queryIns($query) {
        $this->mysqli->query($query);
    }
}