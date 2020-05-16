<?php
/* Smarty version 3.1.30, created on 2020-04-27 08:00:58
  from "/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/DITI/BanqueDuPeupleSamane/src/view/ResCompte/client/detail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ea6751adab861_05856447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '979366b86069c30cf298fa77f60d65e323333b2e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/DITI/BanqueDuPeupleSamane/src/view/ResCompte/client/detail.html',
      1 => 1587795254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea6751adab861_05856447 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Client | Details</title>
    <link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/datepicker3.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/styles.css" rel="stylesheet">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
responsablecompte/index/<?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
"><span>Banque du </span>Peuple</a>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <em class="fa fa-envelope"></em><span class="label label-danger">15</span>
                </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                            </a>
                                <div class="message-body"><small class="pull-right">3 mins ago</small>
                                    <a href="#"><strong>John Doe</strong> commented on <strong>your
                                        photo</strong>.</a>
                                    <br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                            </a>
                                <div class="message-body"><small class="pull-right">1 hour ago</small>
                                    <a href="#">New message from <strong>Jane Doe</strong>.</a>
                                    <br/><small class="text-muted">12:27 pm - 25/03/2015</small></div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="all-button"><a href="#">
                                <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                            </a></div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <em class="fa fa-bell"></em><span class="label label-info">5</span>
                </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li><a href="#">
                            <div><em class="fa fa-envelope"></em> 1 New Message
                                <span class="pull-right text-muted small">3 mins ago</span></div>
                        </a></li>
                        <li class="divider"></li>
                        <li><a href="#">
                            <div><em class="fa fa-heart"></em> 12 New Likes
                                <span class="pull-right text-muted small">4 mins ago</span></div>
                        </a></li>
                        <li class="divider"></li>
                        <li><a href="#">
                            <div><em class="fa fa-user"></em> 5 New Followers
                                <span class="pull-right text-muted small">4 mins ago</span></div>
                        </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"><?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
        <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
responsablecompte/index/<?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
responsablecompte/compteHome/<?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
"><em class="glyphicon glyphicon-cloud">&nbsp;</em>Compte</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
responsablecompte/clientHome/<?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
"><em class="glyphicon glyphicon-user">&nbsp;</em>Client</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Welcome/index"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
</div>
<!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
responsablecompte/index/<?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
">
                <em class="fa fa-home"></em>
            </a></li>
            <li class="active">Home</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Details Client</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="panel-body">
        <div class="row">
            <div class="container" style="margin-top:70px;">
                <div class="col-md-9 col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">Informations du Client</div>
                        <div class="panel-body">
                            <table class="table table-dark">
                                <thead>
                                <tr>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prenom</th>
                                    <th scope="col">NCI</th>
                                    <th scope="col">Profession</th>
                                    <th scope="col">Salaire</th>
                                    <th scope="col">Telephone</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Adresse</th>
                                    <th scope="col">Etablissement</th>
                                    <th scope="col">Employeur</th>
                                    <th scope="col">Tel Employeur</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getNom();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getPrenom();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getNci();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getProfession();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getSalaire();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getTelephone();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getUser()->getEmail();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getAdresse();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getEmployeur()->getRaisonSocial();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getEmployeur()->getNom();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getEmployeur()->getNumero();?>
</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                   <!-- <div class="container">
                        <br/>
                        <div class="panel panel-default">

                            <div class="panel-heading">Fieldset Exemple</div>
                            <div class="panel-body">

                                <fieldset class="col-md-6">
                                    <legend>Fieldset Title</legend>

                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <p>Fieldset content...</p>
                                        </div>
                                    </div>

                                </fieldset>

                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>-->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading">Les Comptes de <?php echo $_smarty_tpl->tpl_vars['client']->value->getPrenom();?>
 <?php echo $_smarty_tpl->tpl_vars['client']->value->getNom();?>
</div>
                    <div class="panel-body">
                        <table class="table table-dark">
                            <thead>
                            <tr>
                                <th scope="col">Numero</th>
                                <th scope="col">Type</th>
                                <th scope="col">Date Creation</th>
                                <th scope="col">solde</th>
                                <th scope="col">Etat</th>
                                <th scope="col">Date Fin Blocage</th>
                            </tr>
                            </thead>
                           <tbody>
                               <?php if ($_smarty_tpl->tpl_vars['listCompte']->value != null) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listCompte']->value, 'compte');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['compte']->value) {
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getNumero();?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getType();?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getDateCreation();?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getSolde();?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getEtat();?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getDateLimite();?>
</td>

                                        </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                               <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-sm-12">
            <p class="back-link">All Right reserved V 1.3.0 BP  <smal class="color-blue text-lowercase">mballoSoft</smal></p>
        </div>
    </div>
    <!--/.row-->
</div>
</div>
<!--/.main-->

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/chart.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/chart-data.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/easypiechart.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/easypiechart-data.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/custom.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
    };
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
