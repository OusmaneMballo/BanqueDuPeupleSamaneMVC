<?php
/* Smarty version 3.1.30, created on 2020-04-23 18:53:12
  from "/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/DITI/BanqueDuPeupleSamane/src/view/ResCompte/client/edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ea1c7f8346f83_82434016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36c0cd3cb6b58b71517d7f32d1a652dce9931673' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/DITI/BanqueDuPeupleSamane/src/view/ResCompte/client/edit.html',
      1 => 1587660359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea1c7f8346f83_82434016 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil | Client</title>
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
            <h1 class="page-header">Modifier Client</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="panel-body">
        <div class="row">
            <!--/.col-->
            <div class="col-md-9 col-md-12">
                <form name="add" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
responsablecompte/editClient/<?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
,<?php echo $_smarty_tpl->tpl_vars['client']->value->getId();?>
">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nom">Nom *</label>
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['client']->value->getNom();?>
" name="nom" id="nom" placeholder="Nom" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="prenom">Prenom *</label>
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['client']->value->getPrenom();?>
" name="prenom" id="prenom" placeholder="Prenom"
                                   required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nci">Nci</label>
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['client']->value->getNci();?>
" name="nci" id="nci"
                                   placeholder="Numero cate d'identite" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['client']->value->getAdresse();?>
" name="adresse" id="address"
                                   placeholder="1234 Main St" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="telephone">Telephone</label>
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['client']->value->getTelephone();?>
" name="telephone" id="telephone" placeholder="Telephone">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="login">Login *</label>
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['client']->value->getUser()->getLogin();?>
" name="login" id="login" placeholder="Login" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="passwd">Password</label>
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['client']->value->getUser()->getPasswd();?>
" name="passwd" id="passwd" placeholder="Mot de Passe" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['client']->value->getUser()->getEmail();?>
" name="email" id="email" placeholder="Email"
                                   required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="profession">Profession</label>
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['client']->value->getProfession();?>
" name="profession" id="profession" placeholder="Profession">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="panel panel-default chat">
                                <div class="panel-heading">
                                    Vous travaillez?
                                    <span class="pull-right clickable panel-toggle panel-button-tab-left"><em
                                            class="fa fa-toggle-down"></em></span></div>
                                <div class="panel-body">
                                    Informations de l'employeur
                                    <div class="form-group">
                                        <label for="passwd">Salaire</label>
                                        <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['client']->value->getSalaire();?>
" name="salaire" id="salaire"  placeholder="Salaire">
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['client']->value->getEmployeur() != null) {?>
                                        <div class="form-group">
                                            <label for="social">Raison Sociale</label>
                                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['client']->value->getEmployeur()->getRaisonSocial();?>
" name="social" id="social"  placeholder="Raison Sociale">
                                        </div>
                                        <div class="form-group">
                                            <label for="employeur">Nom Employeur</label>
                                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['client']->value->getEmployeur()->getNom();?>
" name="nomemp" id="employeur"  placeholder="Nom Employeur">
                                        </div>
                                        <div class="form-group">
                                            <label for="numero">Telephone</label>
                                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['client']->value->getEmployeur()->getNumero();?>
" name="numero" id="numero"  placeholder="Telephone">
                                        </div>
                                        <div class="form-group">
                                            <label for="adresseEmp">Adresse</label>
                                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['client']->value->getEmployeur()->getAdresse();?>
" name="adresseEmp" id="adresseEmp"  placeholder="Adresse">
                                        </div>
                                        <?php } else { ?>
                                            <div class="form-group">
                                                <label for="social">Raison Sociale</label>
                                                <input type="text" class="form-control" name="social" id="social"  placeholder="Raison Sociale">
                                            </div>
                                            <div class="form-group">
                                                <label for="employeur">Nom Employeur</label>
                                                <input type="text" class="form-control" name="nomemp" id="employeur"  placeholder="Nom Employeur">
                                            </div>
                                            <div class="form-group">
                                                <label for="numero">Telephone</label>
                                                <input type="text" class="form-control" name="numero" id="numero"  placeholder="Telephone">
                                            </div>
                                            <div class="form-group">
                                                <label for="adresseEmp">Adresse</label>
                                                <input type="text" class="form-control" name="adresseEmp" id="adresseEmp"  placeholder="Adresse">
                                            </div>
                                    <?php }?>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-primary col-md-12">Valider</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--/.col-->
        </div>

        <div class="row">
            <div class="container" style="margin-top:70px;">
                <div class="col-md-9 col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">Liste des Clients</div>
                        <div class="panel-body">
                            <table class="table table-dark">
                                <thead>
                                <tr>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prenom</th>
                                    <th scope="col">Profession</th>
                                    <th scope="col">Telephone</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listclient']->value, 'client');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getNom();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getPrenom();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getProfession();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getTelephone();?>
</td>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
responsablecompte/findByIdClient/<?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
,<?php echo $_smarty_tpl->tpl_vars['client']->value->getId();?>
">
                                            <button class="btn btn-info btn-sm">Modifier</button>
                                        </a>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
responsablecompte/detailClient/<?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
,<?php echo $_smarty_tpl->tpl_vars['client']->value->getId();?>
">
                                            <button class="btn btn-warning btn-sm">Detailles</button>
                                        </a>
                                    </td>
                                </tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </tbody>
                            </table>
                        </div>
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
