<?php

class DB {

    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = 'ueh_burger';

    public $con = null;

    public function __construct() {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error) {
            echo "Lỗi kết nối đến máy chủ: " .$this->con->connect_error;
        }
        mysqli_set_charset($this->con,'utf8');
    }

    public function __destruct() {
        $this->closeConnection();
    }

    protected function closeConnection() {
        if ($this->con != null) {
            $this->con->close();
            $this->con = null;
        }
    }
}
?>
