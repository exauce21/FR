<?php
/* Smarty version 3.1.30, created on 2019-10-10 04:40:59
  from "C:\xampp\htdocs\Licence\FR-master_2\src\view\users\mission\listemission.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d9e9a3b555072_82827786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a88229427d169804b14e2ce89fb88d0a64d2674a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Licence\\FR-master_2\\src\\view\\users\\mission\\listemission.html',
      1 => 1570675235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e9a3b555072_82827786 (Smarty_Internal_Template $_smarty_tpl) {
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
            <div class="page-header" style="margin-top: -30px;">
                <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>                 
                </span>
             Liste des mission
            </div>

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row mt-3"> 
                        <div class="col-9">
                            <a data-toggle="modal" data-target="#ajoutModal" class="btn btn-sm btn-inverse-info">
                                <i class="mdi mdi-plus"></i> Créer
                            </a>
                            <a href="" class="btn btn-sm btn-danger">
                                <i class="mdi mdi-close-circle-outline"></i> Rejetée
                            </a>
                            <a href="" class="btn btn-sm btn-success">
                                <i class="mdi mdi-checkbox-marked-circle-outline"></i> Validée
                            </a>
                            <a href="" class="btn btn-sm btn-info">
                                <i class="mdi mdi-alert-circle-outline"></i> En attente
                            </a>
                        </div>
                        <div class="col-3">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Rechercher" aria-label="Rechercher" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-sm btn-facebook" type="button">
                                    <i class="mdi mdi-magnify"></i>
                                    </button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/Mission" style="text-decoration: none; color: black;">
                                    <h4>Nom de mission</h4>
                                    <p style="color: gray;">bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine 
                                    preimaginary saunders demidolmen Chaldaic allusiveness
                                     lorriker unworshipping ribaldish tableman hendiadys </p>
                                </a>
                            </td>
                            <td width="12%">
                                <p class="text-gray" style="font-size: 12px">
                                    <i class="mdi mdi-timetable"></i> 12-05-2019
                                </p>
                                <p class="text-danger">
                                    <i class="mdi mdi-record"></i>
                                    <button class="btn btn-sm btn-inverse-danger">
                                     <i class="mdi mdi-delete"></i>
                                    </button>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="" style="text-decoration: none; color: black;">
                                    <h4>Nom de mission</h4>
                                    <p style="color: gray;">bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine 
                                    preimaginary saunders demidolmen Chaldaic allusiveness
                                     lorriker unworshipping ribaldish tableman hendiadys </p>
                                </a>
                            </td>
                            
                            <td width="12%">
                                <p class="text-gray" style="font-size: 12px">
                                    <i class="mdi mdi-timetable"></i> 12-05-2019
                                </p>
                                <p class="text-success">
                                    <i class="mdi mdi-record"></i>
                                    <button class="btn btn-sm btn-inverse-danger">
                                     <i class="mdi mdi-delete"></i>
                                    </button>
                                </p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
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

  <!-- Ajout Modal-->
  <div class="modal fade" id="ajoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Créer une mission</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
          <form class="forms-sample">
              <div class="form-group">
                  <label for="exampleInputUsername1">Compagnie</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Compagnie">
              </div>
              <div class="form-group">
                  <label for="exampleInputUsername1">Nom de la mission</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nom">
              </div>
              <div class="form-group">
                  <label for="exampleInputUsername1">Nom du responsable</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nom">
              </div>

              <div class="form-group">
                  <label for="exampleInputUsername1">Description de la mission</label>
                  <textarea class="form-control" name="" id="" ></textarea>
              </div>
              
              <div class="form-group">
                  <label for="exampleInputUsername1">Durée</label>
                  <input type="email" class="form-control" id="exampleInputUsername1" placeholder="Durée">
              </div>
              <a data-toggle="modal" data-target="#suivant1Modal" class="btn btn-sm btn-info mr-2">Suivant</a>
              <button class="btn btn-sm btn-danger">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>

   <!-- Ajout 2 Modal-->
   <div class="modal fade" id="suivant1Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Créer une mission</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>  
          </div>
          <div class="modal-body">
            <form class="forms-sample">
                <p></p>
                <div class="form-group">
                    <label for="exampleInputUsername1">Date création</label>
                    <input type="date" class="form-control" id="exampleInputUsername1">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Date début</label>
                    <input type="date" class="form-control" id="exampleInputUsername1">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Date fin</label>
                    <input type="date" class="form-control" id="exampleInputUsername1">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Nombre de participants</label>
                    <select class="form-control" name="" id="">
                      <option value="">1</option>
                      <option value="">2</option>
                      <option value="">3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Nombre de site</label>
                    <select class="form-control" name="" id="">
                      <option value="">1</option>
                      <option value="">2</option>
                      <option value="">3</option>
                    </select>
                </div>
                <a data-toggle="modal" data-target="#suivant2Modal" class="btn btn-sm btn-info mr-2">Suivant</a>
                <button class="btn btn-sm btn-danger">Cancel</button>
            </form>
          </div>
        </div>
      </div>
   </div>

    <!-- Ajout 3 Modal-->
    <div class="modal fade" id="suivant2Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ajout participants</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="modal-body">
            <form class="forms-sample">
                <div class="form-group">
                    <label for="exampleInputUsername1">Nom</label>
                    <input type="text" class="form-control" id="exampleInputUsername1"  placeholder="Nom">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Prenom</label>
                    <input type="text" class="form-control" id="exampleInputUsername1"  placeholder="Prenom">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Tel</label>
                    <input type="text" class="form-control" id="exampleInputUsername1"  placeholder="Tel">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Email</label>
                    <input type="email" class="form-control" id="exampleInputUsername1"  placeholder="Email">
                </div>
                
                <div class="form-group">
                    <a href="" class="btn btn-sm btn-success mr-2">Ajouter dans la liste</a>
                </div>

                <div class="form-group">
                    <label for="exampleInputUsername1">Liste des participants</label>
                    <div class="form-control" style="height: 60px;">

                    </div>
                </div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/Sitemission" class="btn btn-sm btn-info mr-2">Suivant</a>
                <button class="btn btn-sm btn-danger">Cancel</button>
            </form>
          </div>
        </div>
      </div>
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
