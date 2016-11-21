<?php 
/**
 * @param mysql帮助类
 */
class sql_helper{
	$hostname = "";
	$username = "";
	$password = "";
	$database = "";
	function __construct($hostname,$username,$password,$database){
		$this -> hostname = $hostname;
		$this -> username = $username;
		$this -> password = $password;
		$this -> database = $database;

		// 初始化数据库连接
		on_init_connect();
	}

	/**
	 * @return 初始化数据库连接
	 */
	function on_init_connect(){
		var $db_link = $mysql_pconnect($hostname,$username,$password) 
		or die ("无法连接到" . $hostname ."mysql数据库" . $database . "请确认mysql服务器已启动且用户名密码正确！");

		// 选择数据库
		mysql_select_db("use " . $database , $db_link);

		return $db_link;
	}

	
}
?>