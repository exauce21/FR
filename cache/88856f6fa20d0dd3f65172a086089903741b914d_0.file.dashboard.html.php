<?php
/* Smarty version 3.1.30, created on 2019-09-03 03:36:46
  from "C:\xampp\htdocs\Licence\php\FigthRisk\src\view\admin_entreprise\dashboard.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d6dc3ae490f33_87626866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88856f6fa20d0dd3f65172a086089903741b914d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Licence\\php\\FigthRisk\\src\\view\\admin_entreprise\\dashboard.html',
      1 => 1567474585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6dc3ae490f33_87626866 (Smarty_Internal_Template $_smarty_tpl) {
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
        <a class="navbar-brand brand-logo" href="../../index.html"><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/logo.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/logo-mini.svg" alt="logo"/></a>
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
                <div class="preview-thumbnail">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                  <p class="text-gray mb-0">
                    1 Minutes ago
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                  <p class="text-gray mb-0">
                    15 Minutes ago
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                  <p class="text-gray mb-0">
                    18 Minutes ago
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <h6 class="p-3 mb-0 text-center">4 new messages</h6>
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
                    <i class="mdi mdi-cached mr-2 text-success"></i>
                    Activity Log
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-logout mr-2 text-primary"></i>
                    Signout
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
            <a class="nav-link" href="../../index.html">
              <span>Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <span class="menu-title">Système</span>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Entreprise/Liste">
              <span class="menu-title">Entreprise</span>
              <i class="mdi mdi-account-location menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Sousadmin/Liste">
              <span class="menu-title">Sous-admin</span>
              <i class="mdi mdi-account-multiple menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <span class="menu-title">Organigramme</span>
              <i class="mdi mdi-sitemap menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Entreprise/Admin">
              <span class="menu-title">Admin entreprise</span>
              <i class="mdi mdi-account-settings-variant menu-icon"></i>
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
            <a class="nav-link" href="">
              <span class="menu-title">Service client</span>
              <i class="mdi mdi-human-child menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/Liste">
              <span class="menu-title">Gestion user</span>
              <i class="mdi mdi-account-settings-variant menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Risque/Liste">
              <span class="menu-title">Risques</span>
              <i class="mdi mdi-alert-circle-outline menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#evaluation-pages" aria-expanded="false" aria-controls="evaluation-pages">
              <span class="menu-title">Evaluation</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-refresh menu-icon"></i>
            </a>
            <div class="collapse" id="evaluation-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">Evaluation en attente</a></li>
                <li class="nav-item"> <a class="nav-link" href=""> Evaluation validée</a></li>
                <li class="nav-item"> <a class="nav-link" href=""> Evaluation rejetée </a></li>
              </ul>
              </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
              <span class="menu-title">Incident</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-medical-bag menu-icon"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Incident/Liste">Liste incident</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Nouvel</a></li>
              </ul>
              </div>
           </li>

           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#mission-pages" aria-expanded="false" aria-controls="mission-pages">
              <span class="menu-title">Mission</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-archive menu-icon"></i>
            </a>
            <div class="collapse" id="mission-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Mission/Liste">Liste mission</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Historique</a></li>
              </ul>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Site/Liste">
              <span class="menu-title">Site</span>
              <i class="mdi mdi-google-maps menu-icon"></i>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Supadmin/Listemessage">
              <span class="menu-title">Message</span>
              <i class="mdi mdi-message-text menu-icon"></i>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">            
          <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>                 
                </span>
             Dashboard
            </div>

          <div class="row">
            <div class="col-md-3 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                  <h5 class="font-weight-normal mb-3">Nombre d'entreprise
                    <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h5>
                  <h2>15</h2>
                  <h6 class="card-text">Entreprises</h6>
                </div>
              </div>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>                  
                  <h5 class="font-weight-normal mb-3">Nombre de sous-admin
                    <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                  </h5>
                  <h2>33</h2>
                  <h6 class="card-text">Sous-admins</h6>
                </div>
              </div>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>                                    
                  <h5 class="font-weight-normal mb-3">Nombre d'utilisateurs
                    <i class="mdi mdi-diamond mdi-24px float-right"></i>
                  </h5>
                  <h2>741</h2>
                  <h6 class="card-text">Utilisateurs</h6>
                </div>
              </div>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>                  
                  <h5 class="font-weight-normal mb-3">Nombre d'utilisateurs online
                    <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                  </h5>
                  <h2>34</h2>
                  <h6 class="card-text">Utilisateurs online</h6>
                </div>
              </div>
            </div>
          </div>
          

          <div class="row">
            <div class="col-lg-7 grid-margin stretch-card">
              <div class="card">
                <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Statistique</h4>
                        <!--Pourcentage des utilisateurs connectés-->
                        <div class="row mt-3">
                          <div class="col-10">
                            <p>Pourcentage des utilisateurs connectés <br>65% </p>
                          </div>
                          <div class="col-2">
                            <p class="text-success"><i class="mdi mdi-arrow-up"></i><br>6500</p>
                          </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <!--Pourcentage des utilisateurs non connectés-->
                        <div class="row mt-3">
                            <div class="col-10">
                              <p>Pourcentage des utilisateurs non connectés <br>15% </p>
                            </div>
                            <div class="col-2">
                              <p class="text-danger"><i class="mdi mdi-arrow-down"></i><br>1500</p>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                         <!--Pourcentage des entreprises actives -->
                         <div class="row mt-3">
                            <div class="col-10">
                              <p>Pourcentage des entreprises actives  <br>35% </p>
                            </div>
                            <div class="col-2">
                              <p class="text-danger"><i class="mdi mdi-arrow-down"></i><br>3500</p>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <!--Pourcentage des risques matérialisés-->
                        <div class="row mt-3">
                            <div class="col-10">
                              <p>Pourcentage des risques matérialisés <br>85% </p>
                            </div>
                            <div class="col-2">
                              <p class="text-success"><i class="mdi mdi-arrow-up"></i><br>8500</p>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 85%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>

            <div class="col-lg-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Statistique</h4>
                  <canvas id="doughnutChart" style="height:250px; width: 100%;"></canvas>
                  <div class="row mt-3">
                      <div class="col-9">
                        <p>58% des utilisateurs connectés</p>
                      </div>
                      <div class="col-3">
                        <p class="text-danger">42% <i class="mdi mdi-arrow-down"></i></p>
                      </div>
                      <div class="col-9">
                        <p>80% des entreprises actives</p>
                      </div>
                      <div class="col-3">
                        <p class="text-danger">20% <i class="mdi mdi-arrow-down"></i></p>
                      </div>
                      <div class="col-9">
                        <p>20% des risques matérialisés</p>
                      </div>
                      <div class="col-3">
                        <p class="text-success">80% <i class="mdi mdi-arrow-up"></i></p>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
         <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Messages</h4>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User type</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Jacob</td>
                        <td>53275531</td>
                        <td>12 May 2017</td>
                        <td><label class="badge badge-info">Ecrire</label></td>
                      </tr>
                      <tr>
                        <td>Messsy</td>
                        <td>53275532</td>
                        <td>15 May 2017</td>
                        <td><label class="badge badge-info">Ecrire</label></td>
                      </tr>
                      <tr>
                        <td>John</td>
                        <td>53275533</td>
                        <td>14 May 2017</td>
                        <td><label class="badge badge-info">Ecrire</label></td>
                      </tr>
                      <tr>
                        <td>Peter</td>
                        <td>53275534</td>
                        <td>16 May 2017</td>
                        <td><label class="badge badge-info">Ecrire</label></td>
                      </tr>
                      <tr>
                        <td>Dave</td>
                        <td>53275535</td>
                        <td>20 May 2017</td>
                        <td><label class="badge badge-info">Ecrire</label></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <p class="card-description">
                        Utilisateurs connectés
                      </p>
                      <div class="row">
                        <div class="col-md-3" style="padding: 0px;">
                            <a class="nav-link" href="#" style="text-decoration: none;">
                              <p class="mb-1 text-black">
                                <i class="mdi mdi-account-circle" style="color: rgb(228, 226, 227); font-size: 35px;"></i>
                                <i class="mdi mdi-record text-success" style="margin-left: -18px;"></i>          
                                David Greymaax <i class="mdi mdi-timer" style="float: right; color: grey;">12:19</i></p>
                            </a>
                            
                        </div>
                        <div class="col-md-3" style="padding: 0px;">
                            <a class="nav-link" href="#" style="text-decoration: none;">
                                <p class="mb-1 text-black">
                                <i class="mdi mdi-account-circle" style="color: rgb(228, 226, 227); font-size: 35px;"></i>
                                <i class="mdi mdi-record text-success" style="margin-left: -18px;"></i>          
                                David Greymaax</p>
                            </a>
                        </div>
                        <div class="col-md-3" style="padding: 0px;">
                            <a class="nav-link" href="#" style="text-decoration: none;">
                                <p class="mb-1 text-black">
                                <i class="mdi mdi-account-circle" style="color: rgb(228, 226, 227); font-size: 35px;"></i>
                                <i class="mdi mdi-record text-success" style="margin-left: -18px;"></i>          
                                David Greymaax</p>
                            </a>
                        </div>
                        <div class="col-md-3" style="padding: 0px;">
                            <a class="nav-link" href="#" style="text-decoration: none;">
                                <p class="mb-1 text-black">
                                <i class="mdi mdi-account-circle" style="color: rgb(228, 226, 227); font-size: 35px;"></i>
                                <i class="mdi mdi-record text-success" style="margin-left: -18px;"></i>          
                                David Greymaax</p>
                            </a>
                        </div>
                        <div class="col-md-3" style="padding: 0px;">
                            <a class="nav-link" href="#" style="text-decoration: none;">
                                <p class="mb-1 text-black">
                                <i class="mdi mdi-account-circle" style="color: rgb(228, 226, 227); font-size: 35px;"></i>
                                <i class="mdi mdi-record text-success" style="margin-left: -18px;"></i>          
                                David Greymaax</p>
                            </a>
                        </div>
                        <div class="col-md-3" style="padding: 0px;">
                            <a class="nav-link" href="#" style="text-decoration: none;">
                                <p class="mb-1 text-black">
                                <i class="mdi mdi-account-circle" style="color: rgb(228, 226, 227); font-size: 35px;"></i>
                                <i class="mdi mdi-record text-success" style="margin-left: -18px;"></i>          
                                David Greymaax</p>
                            </a>
                        </div>
                        <div class="col-md-3" style="padding: 0px;">
                            <a class="nav-link" href="#" style="text-decoration: none;">
                                <p class="mb-1 text-black">
                                <i class="mdi mdi-account-circle" style="color: rgb(228, 226, 227); font-size: 35px;"></i>
                                <i class="mdi mdi-record text-success" style="margin-left: -18px;"></i>          
                                David Greymaax</p>
                            </a>
                        </div>
                        <div class="col-md-3" style="padding: 0px;">
                            <a class="nav-link" href="#" style="text-decoration: none;">
                                <p class="mb-1 text-black">
                                <i class="mdi mdi-account-circle" style="color: rgb(228, 226, 227); font-size: 35px;"></i>
                                <i class="mdi mdi-record text-success" style="margin-left: -18px;"></i>          
                                David Greymaax</p>
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