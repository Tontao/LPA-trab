<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
require_once 'lib/db.inc.php';

$smarty = new Smarty();
$paginas = 'extends:templates/login.html';


if(isset($_GET['modulo'])){
	if($_GET['modulo'] == 'login'){
		if($_GET['acao'] == 'logar'){
		
			$tab=$_GET["tab"];

			if($tab=="opc1"){
				$chave_login=$_GET["log"];
				$senha=$_GET["password"];

				$result = Login($chave_login, $senha);
				if($result != 1){
					
					echo"Este usuario ja está em uso por favor cadastre outro nome!";
					$paginas .= '|login.html';
					
				}else{
					
					$paginas .= '|index.html';
					
				}
			}
			if($tab=="opc2"){
				
				$chave_login=$_GET["log2"];
				$senha=$_GET["password2"];
				$nome =$_GET["nome"];
				
				Cadastrar($chave_login,$senha,$nome);
				
			}
		}
	}
}
$smarty->display($paginas);