<?php
/* Smarty version 3.1.30, created on 2019-10-30 15:51:29
  from "C:\xampp\htdocs\Licence\FR\src\view\users\mission\chekrisque.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5db9a371bb9e31_81335342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b37115597484ef82d9cc8c2f054fef885a7ec354' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Licence\\FR\\src\\view\\users\\mission\\chekrisque.html',
      1 => 1572311360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db9a371bb9e31_81335342 (Smarty_Internal_Template $_smarty_tpl) {
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
User/ListeMission">
              <span class="menu-title">Mission</span>
              <i class="mdi mdi-archive menu-icon"></i>
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
User/Evaluationrisque">
              <span class="menu-title">Risques</span>
              <i class="mdi mdi-alert-circle-outline menu-icon"></i>
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
                Checrisque véhicule  
            </div> 

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row"> 
                         <h5>DESCRIPTION MISSION</h5>
                           
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row"> 
                        <div class="col-lg-6">
                            
                            <div class="form-group row" style="margin-bottom: -10px">
                                <label for="exampleInputMobile" class="col-sm-4 col-form-label">Conducteur :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="exampleInputMobile" placeholder="Conducteur">
                                </div>
                            </div>  
                            <div class="form-group row" style="margin-bottom: -10px">
                                <label for="exampleInputMobile" class="col-sm-4 col-form-label">N° de plaque :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="exampleInputMobile" placeholder="N° de plaque">
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: -10px">
                                <label for="exampleInputUsername2" class="col-sm-4 col-form-label">Tel du conducteur :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Tel du conducteur">
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="col-lg-6">
                            
                            <div class="form-group row" style="margin-bottom: -10px">
                                <label for="exampleInputMobile" class="col-sm-4 col-form-label">Type de Véhicule :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="exampleInputMobile" placeholder="Type de Véhicule">
                                </div>
                            </div>  
                            <div class="form-group row" style="margin-bottom: -10px">
                                <label for="exampleInputMobile" class="col-sm-4 col-form-label">Type de mission :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="exampleInputMobile" placeholder="Type de mission">
                                </div>
                            </div>
                            <div class="form-group row" style="margin-bottom: -10px">
                                <label for="exampleInputMobile" class="col-sm-4 col-form-label"> Nom auditeur:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="exampleInputMobile" placeholder="Nom auditeur">
                                </div>
                            </div>
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
                    <h5>Camion</h5>
                     
                        <div class="form-group row" style="margin-bottom: -10px">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Type de camion: </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Type de camion">
                            </div>
                        </div>
                        <div class="form-group row" style="margin-bottom: -10px">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">La date de dernier service:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="La date de dernier service ">
                            </div>
                        </div>
                        <div class="form-group row" style="margin-bottom: -10px">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">La distance parcourue :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="exampleInputMobile" placeholder="La distance parcourue">
                            </div>
                        </div>
                      
                  </div>
                </div>
              </div>
            </div>
  
            <div class="row" >
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                               <table class="table table-bordered">
                                   <thead>
                                      <tr class="table-info text-center">
                                          <th colspan="2">DESCRIPTION</th>
                                          <th>OUI</th>
                                          <th>NON</th>
                                      </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td rowspan="5">Vérification des niveaux d’huile et fluide, Essuie-glace, etc…</td>
                                           <td> Huile à moteur</td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val1" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val1" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Hydraulique / Frein</td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="Frein" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="Frein" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                       </tr>
                                       <tr>
                                            <td>Radiateur/refroidissement </td> 
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val2" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val2" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Fuites d'huile</td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val3" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val3" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                       </tr>
                                       <tr> 
                                           <td>Liquide d’essuie-glace </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val4" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val4" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                       </tr>

                                       <tr>
                                            <td>Klaxon</td>
                                            <td>Fonctionnel</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="Klaxon" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="Klaxon" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>

                                        <tr>
                                           <td rowspan="2">Frein</td>
                                           <td> Frein à main</td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="Freinmain" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="Freinmain" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>
                                        <tr>
                                           <td>Frein à pieds</td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="Freinpieds" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="Freinpieds" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>
                                        
                                        <tr>
                                           <td rowspan="5">Feux</td>
                                           <td> Feu frein à pied </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val8" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val8" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Feu frein à main</td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val9" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val9" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                       </tr>
                                       <tr>
                                            <td> Phare</td> 
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val10" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val10" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td> Clignotants</td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val11" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val11" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                       </tr>
                                       <tr> 
                                           <td>Détresse</td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val12" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val12" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                       </tr>

                                         <tr>
                                            <td rowspan="2">Pare-brise</td>
                                            <td>Vitre</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val13" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val13" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                         </tr>
                                         <tr>
                                            <td>Essuie-glace</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val14" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val14" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                         </tr>

                                        <tr>
                                           <td rowspan="5">Pneus</td>
                                           <td> Jantes</td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val5" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val5" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>
                                        <tr>
                                           <td>Pneus </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val6" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val6" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>
                                        <tr>
                                            <td>Ecrous des jantes</td> 
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val17" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val17" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>
                                        <tr>
                                           <td>Pression d'air </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val18" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val18" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>
                                        <tr> 
                                           <td>Pneu de rechange</td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val19" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val19" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>

                                        <tr>
                                            <td rowspan="2">Inspection visuelle</td>
                                            <td>Moteur</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val20" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val20" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>
                                        <tr>
                                            <td>Véhicule</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val21" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val21" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>

                                        <tr>
                                            <td>Ceintures de sécurité</td>
                                            <td>Conformes et suffisantes</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val22" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val22" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>
                                        <tr>
                                            <td>Plaque d’immatriculation</td>
                                            <td>Conforme et bien fixée</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val24" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val24" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>

                                        <tr>
                                            <td rowspan="2">Echappement</td>
                                            <td>Non endommagée</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val25" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val25" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>
                                        <tr>
                                            <td>Niveau bruit acceptable</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val26" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val26" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>

                                        <tr>
                                            <td rowspan="2">Rétroviseur</td>
                                            <td>Arrière</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val27" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val27" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>
                                        <tr>
                                            <td>Côtés</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val28" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val28" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>

                                        <tr>
                                            <td rowspan="2">Contrôle de pression</td>
                                            <td>Huiles</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val29" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val29" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>
                                        <tr>
                                            <td>Air</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val30" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val30" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>

                                        <tr>
                                            <td rowspan="2">Tempêratures</td>
                                            <td>Moteur</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val31" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val31" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>
                                        <tr>
                                            <td>Transmission</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val32" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val32" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>

                                        <tr>
                                           <td rowspan="5">Equipement de sécurité</td>
                                           <td> Extincteur</td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val33" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val33" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>
                                        <tr>
                                           <td>Triangle de signalisation</td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val34" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val34" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>
                                        <tr>
                                            <td>Clé à roue</td> 
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val35" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val35" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>
                                        <tr>
                                           <td>Crie</td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val36" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val36" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>
                                        <tr> 
                                           <td>Trousse de 1er secours</td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val37" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val37" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>

                                        <tr>
                                            <td>Suivi du véhicule au GPS</td>
                                            <td>Système fonctionnel</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val38" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val38" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>

                                        <tr>
                                            <td rowspan="2">Système main libre</td>
                                            <td>Oreillette Bluetooth</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val39" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val39" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>
                                        <tr>
                                            <td>Système intégré</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val40" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val40" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>

                                        <tr>
                                            <td>Pièces et autorisations du véhicule</td>
                                            <td>Disponibles et valides</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val41" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val41" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>
                                        <tr>
                                            <td>Service courant</td>
                                            <td>.....................</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val42" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val42" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>
                                        <tr>
                                            <td>Dernier service</td>
                                            <td>.....................</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val43" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val43" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>
                                         <tr>
                                            <td>Intervalle des services</td>
                                            <td>.....................</td>
                                            <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val44" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                           <td>
                                             <div class="form-check" style="margin-top: -10px">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="val44" id="membershipRadios4" value="" checked>
                                              </label>
                                             </div>
                                           </td>
                                        </tr>
                                   </tbody>
                               </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" >
              <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                             <table class="table table-bordered">
                                 <thead>
                                    <tr class="table-info text-center">
                                        <th colspan="5">INSPECTION JOURNALIERE DU CAMION</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                          <td>Numero de plaque: </td>
                                          <td>
                                            <div class="form-group" style="margin-bottom: -10px">
                                              <input type="text" class="form-control" id="exampleInputMobile">  
                                            </div>
                                          </td>
                                          <td>
                                             Type de camion
                                          </td>
                                          <td>
                                             Essieu simple <br> < 750 kg
                                          </td>
                                          <td>
                                            Double Essieu <br> > 750 kg
                                         </td>
                                      </tr> 
                                      <tr>
                                          <td>Date dernier service</td> 
                                          <td>
                                              <div class="form-group" style="margin-bottom: -10px">
                                                <input type="date" class="form-control" id="exampleInputMobile" placeholder="Conducteur">  
                                              </div>
                                          </td>
                                          <td>
                                            <div class="form-group" style="margin-bottom: -10px">
                                              <input type="text" class="form-control" id="exampleInputMobile">  
                                            </div>
                                          </td>
                                          <td>
                                            Distance parcourue
                                          </td>
                                          <td>
                                            <div class="form-group" style="margin-bottom: -10px">
                                              <input type="text" class="form-control" id="exampleInputMobile">  
                                            </div>
                                          </td>
                                      </tr>
                                 </tbody>
                             </table>
                      </div>
                  </div>
              </div>
          </div>

            <div class="row" >
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                               <table class="table table-bordered">
                                   <thead>
                                      <tr class="table-info text-center">
                                          <th colspan="3">DESCRIPTION</th>
                                      </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                            <td>Le conducteur du camion dispose-t-il du permis de conduire adéquat pour ce type de véhicule ?</td>
                                            <td>
                                                <div class="form-check" style="margin-top: -10px">
                                                 <label class="form-check-label">
                                                   <input type="radio" class="form-check-input" name="permis" id="membershipRadios4" value="" checked>
                                                 </label>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="form-check" style="margin-top: -10px">
                                                 <label class="form-check-label">
                                                   <input type="radio" class="form-check-input" name="permis" id="membershipRadios4" value="" checked>
                                                 </label>
                                                </div>
                                              </td>
                                        </tr> 
                                        <tr>
                                            <td>Les pneus du camion sont-ils corrects.</td> 
                                            <td>
                                                <div class="form-check" style="margin-top: -10px">
                                                 <label class="form-check-label">
                                                   <input type="radio" class="form-check-input" name="pneus" id="membershipRadios4" value="" checked>
                                                 </label>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="form-check" style="margin-top: -10px">
                                                 <label class="form-check-label">
                                                   <input type="radio" class="form-check-input" name="pneus" id="membershipRadios4" value="" checked>
                                                 </label>
                                                </div>
                                              </td>
                                        </tr>
                                        <tr>
                                            <td>Les feux de freinage de la remorque et clignotants fonctionnent-ils correctement ?</td>
                                            <td>
                                              <div class="form-check" style="margin-top: -10px">
                                                 <label class="form-check-label">
                                                   <input type="radio" class="form-check-input" name="feux" id="membershipRadios4" value="" checked>
                                                 </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check" style="margin-top: -10px">
                                                 <label class="form-check-label">
                                                   <input type="radio" class="form-check-input" name="feux" id="membershipRadios4" value="" checked>
                                                 </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Les freins du camion fonctionne-t-ils ?</td>
                                            <td>
                                                <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="freins" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="freins" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                              </td>
                                        </tr>
                                        <tr>
                                            <td>Pneus de secours disponible et pression d’air convenable à la route ?</td> 
                                            <td>
                                                <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="pressiondair" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="pressiondair" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                              </td>
                                        </tr>
                                        <tr>
                                            <td>Remorque en bon état et liaison correcte ?</td> 
                                            <td>
                                                <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="Remorque" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="Remorque" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                              </td>
                                        </tr>
                                        <tr>
                                            <td>Pièce du camion disponible et en cours de validité ?</td>
                                            <td>
                                                <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="Piece" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="Piece" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                              </td>
                                        </tr> 
                                        <tr>
                                            <td>Tapis de caoutchouc de remorque installée ?</td> 
                                            <td>
                                                <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="Tapis" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="Tapis" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                              </td>
                                        </tr>
                                        <tr>
                                            <td>Verrouillage de la remorque en bon état ?</td>
                                            <td>
                                                <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="Verrouillage" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="Verrouillage" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                              </td>
                                        </tr>
                                        <tr>
                                            <td>Chaîne de sécurité de remorque installée ?</td> 
                                            <td>
                                                <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="Chaîne" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                            </td>
                                            <td>
                                                  <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="Chaîne" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>L’essieu est-il bien fixé ?</td>
                                            <td>
                                                <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="essieu" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                            </td>
                                            <td>
                                                  <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="essieu" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Roulement vérifié et en bon état ?</td>
                                            <td>
                                                <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="Roulement" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                            </td>
                                            <td>
                                                  <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="Roulement" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Poulie de remorque en bon état ?</td>
                                            <td>
                                                <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="Poulie" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                            </td>
                                            <td>
                                                  <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="Poulie" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mécanismes de levage en bon état de fonctionnement ?</td>
                                            <td>
                                                <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="Mécanismes" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                            </td>
                                            <td>
                                                  <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="Mécanismes" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bande réfléchissante aux côtés et à l'arrière de la remorque selon les exigences légales ?</td>
                                            <td>
                                                <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="Bande" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                            </td>
                                            <td>
                                                  <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="Bande" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                            </td>    
                                        </tr> 

                                        <tr>
                                            <td>Cordes et mécanismes d'arrimage suffisants pour attacher la charge ?</td> 
                                            <td>
                                                <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="Cordes" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                            </td>
                                            <td>
                                                  <div class="form-check" style="margin-top: -10px">
                                                   <label class="form-check-label">
                                                     <input type="radio" class="form-check-input" name="Cordes" id="membershipRadios4" value="" checked>
                                                   </label>
                                                  </div>
                                            </td> 
                                        </tr>
                                        <tr class="table-info">
                                          <td>Cordes et filets de fixation des charges</td>
                                          <td>
                                            <div class="form-check" style="margin-top: -10px">
                                               <label class="form-check-label">
                                                 <input type="radio" class="form-check-input" name="Cordes2" id="membershipRadios4" value="" checked>
                                               </label>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="form-check" style="margin-top: -10px">
                                               <label class="form-check-label">
                                                 <input type="radio" class="form-check-input" name="Cordes2" id="membershipRadios4" value="" checked>
                                               </label>
                                              </div>
                                          </td> 
                                        </tr>
                                        <tr>
                                          <td>Attache à cliquet/ sangles d’attache en bon Oui Non état ?</td>
                                          <td>
                                            <div class="form-check" style="margin-top: -10px">
                                               <label class="form-check-label">
                                                 <input type="radio" class="form-check-input" name="Cliquet" id="membershipRadios4" value="" checked>
                                               </label>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="form-check" style="margin-top: -10px">
                                               <label class="form-check-label">
                                                 <input type="radio" class="form-check-input" name="Cliquet" id="membershipRadios4" value="" checked>
                                               </label>
                                              </div>
                                          </td> 
                                        </tr>
                                        <tr>
                                          <td>Corde d’attache de cargaison en bon état ?</td>
                                          <td>
                                            <div class="form-check" style="margin-top: -10px">
                                               <label class="form-check-label">
                                                 <input type="radio" class="form-check-input" name="Corde" id="membershipRadios4" value="" checked>
                                               </label>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="form-check" style="margin-top: -10px">
                                               <label class="form-check-label">
                                                 <input type="radio" class="form-check-input" name="Corde" id="membershipRadios4" value="" checked>
                                               </label>
                                              </div>
                                          </td> 
                                        </tr>
                                        <tr>
                                          <td>Filets de cargaison utilisables, sans déchirures ni jointures, solidement attachés</td>
                                          <td>
                                            <div class="form-check" style="margin-top: -10px">
                                               <label class="form-check-label">
                                                 <input type="radio" class="form-check-input" name="Filets" id="membershipRadios4" value="" checked>
                                               </label>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="form-check" style="margin-top: -10px">
                                               <label class="form-check-label">
                                                 <input type="radio" class="form-check-input" name="Filets" id="membershipRadios4" value="" checked>
                                               </label>
                                              </div>
                                          </td> 
                                        </tr>
                                   </tbody>
                               </table>
                               <br>
                               <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/ListeMission" class="btn btn-sm btn-info">
                                 Suivant
                               </a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
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
