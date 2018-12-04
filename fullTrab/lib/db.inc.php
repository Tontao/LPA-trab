<?php
	function conect(){
		$host   = 'localhost';
		$dbname = 'trabagenda';
		$user   = 'root';
		$pass   = '';

		$db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $user, $pass);

		return $db;
	}
	function Login($chave_login,$senha){
		
		$conexao=conect();
		
		$sth = $conexao->prepare("select * from login where usuario=? and senha = ?");
		
		$result = $sth->execute(array($chave_login,$senha));
		
		return $result;
		
	}
	function Cadastrar($chave_login,$senha,$nome){
		
		$conexao=conect();
			
		$sth = $conexao->prepare("INSERT INTO `login` VALUES (?,?,?)");
			
		$result = $sth->execute(array($chave_login,$nome,$senha));
		
		return $result;
	}
	function contatos_Todos(){
		$db = conect();
		$sth = $db->prepare('SELECT * FROM trabagenda
					   ORDER BY nome');
		$sth->execute();
		return $sth->fetchAll();
	}
	function contatos_Nome($nome){
		$db = conect();
		$sth = $db->prepare('SELECT * FROM trabagenda
					WHERE nome = ?
					ORDER BY nome');
		$sth->execute(array($nome));
		return $sth->fetchAll();
	}
?>