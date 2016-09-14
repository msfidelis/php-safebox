<?php
/* Smarty version 3.1.29, created on 2016-09-14 16:57:03
  from "/home/matheus/Sites/securebox/app/src/Template/Element/Navbar/navbar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57d9815f3dbb81_24703484',
  'file_dependency' => 
  array (
    '51724bc2e4aa7fc02855b292dd49ab29eac7193c' => 
    array (
      0 => '/home/matheus/Sites/securebox/app/src/Template/Element/Navbar/navbar.tpl',
      1 => 1473868431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d9815f3dbb81_24703484 ($_smarty_tpl) {
?>
<div class="side-menu sidebar-inverse">
    <nav class="navbar navbar-default" role="navigation">
        <div class="side-menu-container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <div class="icon fa fa-pied-piper-alt"></div>
                    <div class="title">SecureBox</div>
                </a>
                <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                    <i class="fa fa-times icon"></i>
                </button>
            </div>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="/dashboard">
                        <span class="icon fa fa-tachometer"></span><span class="title">SecureBox</span>
                    </a>
                </li>
                <li class="panel panel-default dropdown">
                    <a data-toggle="collapse" href="#dropdown-table">
                        <span class="icon fa fa-table"></span><span class="title">Menu Cliente</span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-table" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="/agendas/">Administração</a>
                                </li>
                                <li><a href="table/datatable.html">Datatable</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <?php if ($_SESSION['Auth']['User']['tipo'] == 1) {?>
                    <li class="panel panel-default dropdown">
                        <a data-toggle="collapse" href="#dropdown-form">
                            <span class="icon fa fa-file-text-o"></span><span class="title">Menu Admin</span>
                        </a>
                        <!-- Dropdown level 1 -->
                        <div id="dropdown-form" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="nav navbar-nav">
                                    <li><a href="/transacoes">Gerencia de Transacoes</a></li>
                                    <li><a href="/usuarios">Gerencia de Usuarios</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                <?php }?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</div><?php }
}
