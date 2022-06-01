<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="ordztn2u9vshu66u";$this->pass="kf39on9sultb0faj";$this->host="cxmgkzhk95kfgbq4.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";$this->ddbb="tcz8wur539g1fjb7";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
