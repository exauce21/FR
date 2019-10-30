<?php
/* Smarty version 3.1.30, created on 2019-09-03 02:31:07
  from "C:\xampp\htdocs\Licence\php\FigthRisk\src\view\welcome\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d6db44badf035_56371844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19ccbd07e538c1270fb47ab4bde63436b459be96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Licence\\php\\FigthRisk\\src\\view\\welcome\\login.html',
      1 => 1567470558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6db44badf035_56371844 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-center p-5">
              <div class="brand-logo">
                <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/logo.png">
              </div>
              <h6 class="font-weight-light">Connectez vous pour continuer.</h6>

              <form class="pt-3" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Welcome/Connexion">
                
                <div class="form-group">
                  <input name="email" type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <input name="password" type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                        Se souvenir
                    </label>
                  </div>
                </div>
                <div class="mb-2">
                  <button class="btn btn-block btn-facebook auth-form-btn">
                    Connecter
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                    <a href="#" class="auth-link text-black">Mot de passe oublié ?</a> <br> <br>
                    Vous n'aviez pas un compte ? <a href="register.html" class="text-primary">Cliquer ici</a>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/vendors/js/vendor.bundle.base.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/vendors/js/vendor.bundle.addons.js"><?php echo '</script'; ?>
>
  <!-- endinject -->
  <!-- inject:js -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/off-canvas.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/misc.js"><?php echo '</script'; ?>
>
  <!-- endinject -->
</body>

</html>
<?php }
}
