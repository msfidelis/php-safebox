<?php
/* Smarty version 3.1.29, created on 2016-09-13 19:20:32
  from "/home/matheus/Sites/securebox/app/src/Template/Element/Navbar/navbar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57d85180b65136_60218585',
  'file_dependency' => 
  array (
    '51724bc2e4aa7fc02855b292dd49ab29eac7193c' => 
    array (
      0 => '/home/matheus/Sites/securebox/app/src/Template/Element/Navbar/navbar.tpl',
      1 => 1473790605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d85180b65136_60218585 ($_smarty_tpl) {
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
                        <span class="icon fa fa-table"></span><span class="title">Agenda</span>
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
                <li class="panel panel-default dropdown">
                    <a data-toggle="collapse" href="#dropdown-form">
                        <span class="icon fa fa-file-text-o"></span><span class="title">Cadastros</span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-form" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="/clientes">Clientes</a></li>
                                <li><a href="/materiais">Materiais</a></li>
                                <li><a href="/servicos">Servicos</a></li>
                                <li><a href="/estoques">Estoque</a></li>
                                <li><a href="/funcoes">Funções</a></li>
                                <li><a href="/usuarios">Usuarios</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="panel panel-default dropdown">
                    <a data-toggle="collapse" href="#dropdown-rel">
                        <span class="icon fa fa-pie-chart"></span><span class="title">Relatórios</span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-rel" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="/clientes">Relatório</a></li>
                                <li><a href="/materiais">Relatório</a></li>
                                <li><a href="/estoques">Relatório</a></li>
                                <li><a href="/funcoes">Relatório</a></li>
                                <li><a href="/usuarios">Relatório</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="panel panel-default dropdown">
                    <a data-toggle="collapse" href="#dropdown-form">
                        <span class="icon fa fa-mail-reply-all"></span><span class="title">Mailing de Usuário</span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-form" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="/clientes">Clientes</a></li>
                                <li><a href="/materiais">Materiais</a></li>
                                <li><a href="/estoques">Estoque</a></li>
                                <li><a href="/funcoes">Funções</a></li>
                                <li><a href="/users">Usuarios</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="panel panel-default dropdown">
                    <a data-toggle="collapse" href="#dropdown-form">
                        <span class="icon fa fa-edit"></span><span class="title">Configuração</span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-form" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="/clientes">Clientes</a></li>
                                <li><a href="/materiais">Materiais</a></li>
                                <li><a href="/estoques">Estoque</a></li>
                                <li><a href="/funcoes">Funções</a></li>
                                <li><a href="/users">Usuarios</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</div><?php }
}
