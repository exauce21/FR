<?php
/* Smarty version 3.1.30, created on 2019-06-26 16:21:40
  from "/Applications/XAMPP/xamppfiles/htdocs/mesprojets/Samane_workspace/samanemvc1.9 copie/src/view/test/liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d137f7481cbe2_24478297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd72830a20f6b5082f12183565a85f0c915542cfd' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/mesprojets/Samane_workspace/samanemvc1.9 copie/src/view/test/liste.html',
      1 => 1561558893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d137f7481cbe2_24478297 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page liste</title>
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
">Accueil</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/index">Menu test page </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/getID/1">Menu test get id page </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">Menu test list page </a></li>
			</ul>
		</div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<div class="alert alert-success" style="font-size:18px; text-align:justify;">
						Merci, l'équipe samanemvc vous remercie :) : 
						je vous ai préparé un CRUD qui marche, il suffit tout simplement d'importer
						la base de données qui se trouve dans le dossier src/view puis test (src/view/test);
						cette base s'appelle samane_test.sql et elle comporte une seule table nommée test.
						ça vous sera très utile j'espère.
						<br/>Et surtout noubliez pas de configurer votre base de données : ou? Dans le dossier config
						puis éditez le fichier database.php. Mettez à on l'etat de la base puis cliquez sur le menu <b>Menu page test liste</b>! Bon code!!!!  :)
					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['tests']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['tests']->value != null) {?>
							<table class="table table-bordered table-stripped">
								<tr>
									<th>Identifiant</th>
									<th>Valeur 1</th>
									<th>Valeur 2</th>
									<th>Action</th>
									<th>Action</th>
								</tr>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tests']->value, 'test');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['test']->value->getId();?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['test']->value->getValeur1();?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['test']->value->getValeur2();?>
</td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/delete/<?php echo $_smarty_tpl->tpl_vars['test']->value->getId();?>
">Supprimer</a></td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/edit/<?php echo $_smarty_tpl->tpl_vars['test']->value->getId();?>
">Editer</a></td>
									</tr>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</table>
						<?php } else { ?>
							Liste vide
						<?php }?>
					<?php }?>
				</div>
				<a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/add">Ajout d'un test</a>
			</div>
		</div>
		
	</body>
</html>
<?php }
}
