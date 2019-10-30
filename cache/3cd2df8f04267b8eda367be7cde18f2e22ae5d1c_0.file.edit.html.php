<?php
/* Smarty version 3.1.30, created on 2019-06-26 16:13:22
  from "/Applications/XAMPP/xamppfiles/htdocs/mesprojets/Samane_workspace/samanemvc1.9 copie/src/view/test/edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d137d82dcc700_09014958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cd2df8f04267b8eda367be7cde18f2e22ae5d1c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/mesprojets/Samane_workspace/samanemvc1.9 copie/src/view/test/edit.html',
      1 => 1552623892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d137d82dcc700_09014958 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page get id</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<style>
			h1{ 
				color: #40007d;
			}
		</style>
	</head>
	<body>
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
		<div class="nav navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/index">Menu page test</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/getID/1">Menu page test 2</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">Menu page test liste</a></li>
			</ul>
		</div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/update">
						<div class="form-group">
							<label class="control-label">ID du test</label>
							<input class="form-control" type="text" name="id" id="id" value="<?php if (isset($_smarty_tpl->tpl_vars['test']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['test']->value->getId();?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Valeur du test</label>
							<input class="form-control" type="text" name="valeur1" id="valeur1" value="<?php if (isset($_smarty_tpl->tpl_vars['test']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['test']->value->getValeur1();?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Valeur2 du test</label>
							<input class="form-control" type="text" name="valeur2" id="valeur2" value="<?php if (isset($_smarty_tpl->tpl_vars['test']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['test']->value->getValeur2();?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="modifier" value="Modifier"/>
							<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">Retour</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
