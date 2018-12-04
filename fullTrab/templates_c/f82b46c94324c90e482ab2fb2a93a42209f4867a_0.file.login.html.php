<?php
/* Smarty version 3.1.33, created on 2018-12-04 10:43:07
  from 'C:\xampp\htdocs\fullTrab\templates\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c064c2b0ab929_55174793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f82b46c94324c90e482ab2fb2a93a42209f4867a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fullTrab\\templates\\login.html',
      1 => 1543916583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c064c2b0ab929_55174793 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
	<head>
	
		<title>Logar</title>
		<meta charset="utf-8"/>
		<link href="css/estilo.css" rel="stylesheet" />
	
	</head>

	<body>
		<form action="index.php">
			<div class="login-wrap">
				<div class="login-html">
					<input id="tab-1" type="radio" name="tab" value="opc1" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
					<input id="tab-2" type="radio" name="tab" value="opc2" class="sign-up"><label for="tab-2" class="tab">Cadastrar-se</label>
					<div class="login-form">
						<div class="sign-in-htm">
							<div class="group">
								<label for="user" class="label">Usuário</label>
								<input id="user" name ="log" type="text" class="input">
							</div>
							<div class="group">
								<label for="pass" class="label">Senha</label>
								<input id="pass" name ="password" type="password" class="input" data-type="password">
							</div>
							<div class="group">
								<input type="submit" class="button" value="logar">
							</div>
						</div>
						<div class="sign-up-htm">
							<div class="group">
								<label for="user" class="label">Nome</label>
								<input id="user" name ="nome" type="text" class="input">
							</div>
							<div class="group">
								<label for="pass" class="label">Senha</label>
								<input id="pass" name ="password2" type="password" class="input" data-type="password">
							</div>
							<div class="group">
								<label for="pass" class="label">Usuário</label>
								<input id="pass" name ="log2" type="text" class="input">
							</div>
							<div class="group">
								<input type="submit" class="button" value="Cadastrar">
							</div>
							<div class="hr"></div>
						</div>
					</div>
				</div>
			</div>
			<input type = "hidden" name= "modulo" value="login" />
			<input type = "hidden" name= "acao" value="logar" />
		</form>
	</body>
</html><?php }
}
