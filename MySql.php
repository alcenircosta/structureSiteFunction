<?php
class MySql{
	private static $pdo;


	public static function conect(){
		$host ='testephp.infoideias.com.br';
		$dbname = 'phalcont_teste01';
		$user ='phalcont_teste01';
		$password ='Ph01al98!@#';

		if(self::$pdo == null){
			try{
				self::$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}catch(Exception $e){
				echo '<h2 style="color:red;">Erro ao conectar ao banco de dados!</h2>';
			}
		}
		return self::$pdo;
	} 
}

?>