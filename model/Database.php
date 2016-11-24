<?php
include_once'/config.php';

class Database
{
    private $host = HOST;
    private $user = USER;
    private $pass = PASS;
    private $database = DATABASE;
    private $db = NULL;
    private $sl = NULL;
    public $result = NULL;
    public $query = NULL;
    
    public function __construct()
    {
        $this->db = mysql_connect($this->host, $this->user, $this->pass);
        $this->sl = mysql_select_db($this->database, $this->db);
        if(!$this->db || !$this->sl){
            echo "Невозможно установить соединение с базой данных<br/>Код ошибки:<br/>";
        	exit(mysql_error());
        }
        else
        {
        	mysql_set_charset('utf8');
        }
        
    }

    public function doQuery($query)
    {
        $result = mysql_query($query, $this->db);
        return $result;
    }
}
