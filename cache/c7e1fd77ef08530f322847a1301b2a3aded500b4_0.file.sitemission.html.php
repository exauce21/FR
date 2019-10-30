<?php
/* Smarty version 3.1.30, created on 2019-10-10 04:43:01
  from "C:\xampp\htdocs\Licence\FR-master_2\src\view\users\mission\sitemission.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d9e9ab54f1d10_26847180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7e1fd77ef08530f322847a1301b2a3aded500b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Licence\\FR-master_2\\src\\view\\users\\mission\\sitemission.html',
      1 => 1570675378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e9ab54f1d10_26847180 (Smarty_Internal_Template $_smarty_tpl) {
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
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/Dashboard" style="font-family: 'Agency FB'; font-size: 35px;">
         <strong style="color: #2E79B9;"> Fight</strong> 
         <strong style="color: #838282;">Risk</strong>
        </a>
        <a class="navbar-brand brand-logo-mini" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/Dashboard">
          <strong style="color: #2E79B9;"> Fight</strong> 
         <strong style="color: #838282;">Risk</strong>
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-email-outline"></i>
              <span class="count-symbol bg-warning"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <h6 class="p-3 mb-0">Messages</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                  <p class="text-gray mb-0">
                    1 Minutes ago
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Supadmin/Listemessage"><h6 class="p-3 mb-0 text-center">Les messages</h6></a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell-outline"></i>
              <span class="count-symbol bg-danger"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <h6 class="p-3 mb-0">Notifications</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-calendar"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                  <p class="text-gray ellipsis mb-0">
                    Just a reminder that you have an event today
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-settings"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                  <p class="text-gray ellipsis mb-0">
                    Update dashboard
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-link-variant"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                  <p class="text-gray ellipsis mb-0">
                    New admin wow!
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <h6 class="p-3 mb-0 text-center">See all notifications</h6>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <div class="nav-profile-img" style="background-color: darkgray;">
                   
                    <span class="availability-status online"></span>             
                  </div>
                  <div class="nav-profile-text">
                    <p class="mb-1 text-black">David Greymaax</p>
                  </div>
                </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-logout mr-2 text-primary"></i>
                      Déconnexion
                  </a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/Dashboard">
              <span>Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <div class="dropdown-divider"></div>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/Evaluationrisque">
              <span class="menu-title">Risques</span>
              <i class="mdi mdi-alert-circle-outline menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/ListeEvaluation">
              <span class="menu-title">Evaluation</span>
              <i class="mdi mdi-refresh menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/ListeIncident">
              <span class="menu-title">Incident</span>
              <i class="mdi mdi-medical-bag menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/ListeMission">
              <span class="menu-title">Mission</span>
              <i class="mdi mdi-archive menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/ListeSite">
              <span class="menu-title">Site</span>
              <i class="mdi mdi-google-maps menu-icon"></i>
            </a>
          </li>

          <div class="dropdown-divider"></div>
           
          <li class="nav-item">
            <a class="nav-link" href="">
              <span class="menu-title">Service client</span>
              <i class="mdi mdi-human-child menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Statistique</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-chart-bar menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Nombre de user</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Mission effectuée</a></li>
              </ul>
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/Listemessage">
              <span class="menu-title">Message</span>
              <i class="mdi mdi-message-text menu-icon"></i>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">            
          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card" style="margin-top: -30px;">
                <div class="card">
                  <div class="card-body">
                    <div class="row mt-3"> 
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nom site</label>
                                <input type="text" class="form-control" id="exampleInputUsername1"  placeholder="Nom">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Localisation</label>
                                <input type="text" class="form-control" id="exampleInputUsername1"  placeholder="Localisation">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Durée du travail</label>
                                <input type="text" class="form-control" id="exampleInputUsername1"  placeholder="Durée">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Description</label>
                                <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                          <table class="table">
                            <thead>
                              <tr>
                                <th></th>
                                <th>OUI</th>
                                <th>NON</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  Existe t'il une opération/tâche en hauteur ?
                                </td>
                                <td>
                                    <div class="form-check" style="margin-top: -10px">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="membershipRadios1" id="membershipRadios1" value="" checked>
                                        </label>
                                      </div>
                                </td>
                                 <td>
                                    <div class="form-check" style="margin-top: -10px">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="membershipRadios1" id="membershipRadios1" value="" checked>
                                        </label>
                                      </div>
                                </td>
                              </tr>
                              <tr>
                                  <td>
                                      Existe t'il une opération/tâche utilisant de l'électricité ?
                                  </td>
                                  <td>
                                      <div class="form-check" style="margin-top: -10px">
                                          <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="membershipRadios2" id="membershipRadios2" value="" checked>
                                          </label>
                                        </div>
                                  </td>
                                   <td>
                                      <div class="form-check" style="margin-top: -10px">
                                          <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="membershipRadios2" id="membershipRadios2" value="" checked>
                                          </label>
                                        </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      Existe t'il une contrainte sécuritaire sur le site ?
                                  </td>
                                  <td>
                                      <div class="form-check" style="margin-top: -10px">
                                          <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="membershipRadios3" id="membershipRadios3" value="" checked>
                                          </label>
                                        </div>
                                  </td>
                                   <td>
                                      <div class="form-check" style="margin-top: -10px">
                                          <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="membershipRadios3" id="membershipRadios3" value="" checked>
                                          </label>
                                        </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      Existe t'il un moyen de transport ?
                                  </td>
                                  <td>
                                      <div class="form-check" style="margin-top: -10px">
                                          <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="membershipRadios4" id="membershipRadios3" value="" checked>
                                          </label>
                                        </div>
                                  </td>
                                   <td>
                                      <div class="form-check" style="margin-top: -10px">
                                          <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="membershipRadios4" id="membershipRadios3" value="" checked>
                                          </label>
                                        </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      Quel est le type de transport ?
                                  </td>
                                  <td>
                                      <div class="form-check" style="margin-top: -10px">
                                          <label class="form-check-label">
                                             <input type="checkbox" class="form-check-input">
                                              Equipement
                                          </label>
                                      </div>
                                  </td>
                                   <td>
                                      <div class="form-check" style="margin-top: -10px">
                                         <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                            Personnel
                                          </label>
                                      </div>
                                  </td>
                              </tr>

                              <tr>
                                  <td>
                                      Quel est le moyen de transport ?
                                  </td>
                                  <td>
                                      <div class="form-check" style="margin-top: -10px">
                                          <label class="form-check-label">
                                             <input type="checkbox" class="form-check-input">
                                              Avion
                                          </label>
                                      </div>
                                      <div class="form-check" style="margin-top: -10px">
                                          <label class="form-check-label">
                                             <input type="checkbox" class="form-check-input">
                                              Bateau
                                          </label>
                                      </div>
                                  </td>
                                   <td>
                                      <div class="form-check" style="margin-top: -10px">
                                         <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                            Camion
                                          </label>
                                      </div>
                                      <div class="form-check" style="margin-top: -10px">
                                          <label class="form-check-label">
                                             <input type="checkbox" class="form-check-input">
                                              Voiture
                                          </label>
                                      </div>
                                  </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nombre d'avion</label>
                                <select class="form-control" name="" id="">
                                  <option value="">1</option>
                                  <option value="">2</option>
                                  <option value="">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nombre de bateau</label>
                                <select class="form-control" name="" id="">
                                  <option value="">1</option>
                                  <option value="">2</option>
                                  <option value="">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nombre de camion</label>
                                <select class="form-control" name="" id="">
                                  <option value="">1</option>
                                  <option value="">2</option>
                                  <option value="">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nombre de voiture</label>
                                <select class="form-control" name="" id="">
                                  <option value="">1</option>
                                  <option value="">2</option>
                                  <option value="">3</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-9">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/Evaluer" class="btn btn-sm btn-info">
                                 Suivant
                            </a>
                        </div>
                        
                    </div>
                </div>
              </div>
            </div> 
          </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- main-panel ends -->
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
  <!-- Custom js for this page-->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/chart.js"><?php echo '</script'; ?>
>
  <!-- End custom js for this page-->
</body>

</html><?php }
}
