<?php
/* Smarty version 3.1.30, created on 2020-04-27 07:48:21
  from "/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/DITI/BanqueDuPeupleSamane/src/view/ResCompte/compte/detail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ea67225009823_30063730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '550f68fb9d21f23f8e3047fb352e0439f8bd557d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/DITI/BanqueDuPeupleSamane/src/view/ResCompte/compte/detail.html',
      1 => 1587966453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea67225009823_30063730 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compte | Gestion</title>
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
            <h1 class="page-header">Gerer Comptes</h1>
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
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getClient()->getNom();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getClient()->getPrenom();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getClient()->getNci();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getClient()->getProfession();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getClient()->getSalaire();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getClient()->getTelephone();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getClient()->getUser()->getEmail();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getClient()->getAdresse();?>
</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading">Gestion du Compte</div>
                    <div class="panel-body">
                        <table class="table table-dark">
                            <thead>
                            <tr>
                                <th scope="col">Numero</th>
                                <th scope="col">Type</th>
                                <th scope="col">Etat</th>
                                <th scope="col">solde</th>
                                <th scope="col">Date Creation</th>
                                <th scope="col">Date Deblocage</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getNumero();?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getType();?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getEtat();?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getSolde();?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getDateCreation();?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getDateLimite();?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['compte']->value->getType() == 'Epargne Simple et Xewel') {?>
                                        <?php if ($_smarty_tpl->tpl_vars['compte']->value->getEtat() == 'Actif') {?>
                                            <!-- Button trigger modal -->
                                             <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#gelerModal">
                                                 Geler
                                             </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="gelerModal" tabindex="-1" role="dialog" aria-labelledby="gelerModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title color-red" id="gelerModalLabel">Geler le compte</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form name="glr" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
responsablecompte/changeEtat/<?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
,<?php echo $_smarty_tpl->tpl_vars['compte']->value->getId();?>
">
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-12">
                                                                            <input type="text" name="etat" value="Geler" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="dategeler" class="color-gray">Precisez une date!</label>
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <input type="date" name="dateDeblocage" class="color-gray" id="dategeler" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-6">
                                                                            <input type="submit" class="btn btn-primary" value="Valider">
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
responsablecompte/activerCompte/<?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
,<?php echo $_smarty_tpl->tpl_vars['compte']->value->getId();?>
">
                                                    <button class="btn btn-success btn-sm">Degeler</button>
                                                </a>
                                            <?php }?>
                                        <?php } else { ?>
                                            <?php if ($_smarty_tpl->tpl_vars['compte']->value->getEtat() == 'Actif') {?>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
                                                    Fermer
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title color-red" id="exampleModalLabel">Fermer le compte</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form name="frm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
responsablecompte/changeEtat/<?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
,<?php echo $_smarty_tpl->tpl_vars['compte']->value->getId();?>
">
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-12">
                                                                            <input type="text" name="etat" value="Fermer" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="dateDeblocage" class="color-gray">Precisez une date d'ouverture!</label>
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <input type="date" name="dateDeblocage" class="color-gray" id="dateouvertur" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-6">
                                                                            <input type="submit" class="btn btn-primary" value="Valider">
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#bloquerModal">
                                                    Bloquer
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="bloquerModal" tabindex="-1" role="dialog" aria-labelledby="bloquerModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="bloquerModalLabel">Bloquer le compte</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form name="blq" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
responsablecompte/changeEtat/<?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
,<?php echo $_smarty_tpl->tpl_vars['compte']->value->getId();?>
">
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-12">
                                                                            <input type="text" name="etat" value="Bloquer" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="dateDeblocage" class="color-gray">Precisez une date de deblocage!</label>
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <input type="date" name="dateDeblocage" class="color-gray" id="dateDeblocage" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-6">
                                                                            <input type="submit" class="btn btn-primary" value="Valider">
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
responsablecompte/activerCompte/<?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
,<?php echo $_smarty_tpl->tpl_vars['compte']->value->getId();?>
">
                                                    <button class="btn btn-success btn-sm">Activer</button>
                                                </a>
                                            <?php }?>
                                        <?php }?>
                                </td>
                            </tr>
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
