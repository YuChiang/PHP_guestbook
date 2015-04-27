<?php
	class SQL {
		private $link;

		function __construct($db_name, $db_user, $db_passwd, $db_host = "127.0.0.1"){
			$dsn = "mysql: dbname={$db_name}; host={$db_host}; charset=UTF8";
			try{
				$this->link = new PDO($dsn, $db_user, $db_passwd);
			}catch(PDOException $e){
				echo $e->getMessage(); 
			}
		}

		public function query($table_name, $column = [], $where = "1", $order = ""){
			$sth = $this->link->prepare("SELECT :columns FROM :table WHERE :range ORDER BY :order;")
			var_dump($sth);

		}
		function __destruct(){
		}
	}
	$sql = new SQL('rakuda_yuchiang', 'rakuda', 'QzcE2BXsyp6nU3MD'); 
	$sql->query('message', ['account', 'content']);
