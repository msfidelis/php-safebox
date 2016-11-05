<!DOCTYPE html>
<html>
    <head>
        {$this->Html->charset()}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            {$cakeDescription}
            {$this->fetch('title')}
        </title>
        {$this->Html->meta('icon')}

        {$this->Html->css(array(
          '/flat/css/bootstrap.min.css',
          '/flat/css/font-awesome.min.css',
          '/flat/css/animate.min.css',
          '/flat/css/bootstrap-switch.min.css',
          '/flat/css/dataTables.bootstrap.css',
          '/flat/css/checkbox3.min.css',
          '/css/jquery-ui.css',
          '/flat/css/dataTables.bootstrap.css',
          '/flat/css/select2.min.css',
          '/flat/css/style.css',
          '/flat/css/themes.css',
          '/js/toast/src/main/resources/css/jquery.toastmessage.css',
          '/css/jquery.datetimepicker.min.css',
          '/flat/css/themes/flat-green.css'
        ))}



        {$this->Html->script(array(
          '/js/jquery.min.js',
          '/js/bootstrap.min.js',
          '/flat/js/Chart.min.js',
          '/flat/js/bootstrap-switch.min.js',
          '/flat/js/jquery.matchHeight-min.js',
          '/flat/js/jquery.dataTables.min.js',
          '/js/jquery-ui.js',
          '/js/masks.js',
          '/js/toast/src/main/javascript/jquery.toastmessage.js',
          '/js/jquery.datetimepicker.full.js',
          '/flat/js/dataTables.bootstrap.min.js',
          '/flat/js/select2.full.min.js',
          '/flat/js/ace.js',
          '/flat/js/app.js',
          '/flat/js/mode-html.js',
          '/flat/js/theme-github.js'
        ))}

    </head>
    <body class="flat-blue">
        <div class="app-container">
            <div class="row content-container">
                <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-expand-toggle">
                                <i class="fa fa-bars icon"></i>
                            </button>
                            <ol class="breadcrumb navbar-breadcrumb">
                                <li class="active">SecureBox</li>
                            </ol>
                            <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                                <i class="fa fa-th icon"></i>
                            </button>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>
                            <li class="dropdown profile">
                                <a href="/users/logout" class=""><i class="fa fa-sign-out"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>


                {$this->element('Navbar/navbar')}
                <!-- Main Content -->

                <div class="container-fluid">
                    <div class="side-body padding-top">
                        <div class='card'>
                            {if isset($alertMessage)}
                                <div class="alert alert-{$alertMessage.type} warning alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>{$alertMessage.msg}</strong>
                                </div>
                            {/if}
                            {$this->fetch('content')}
                        </div>
                    </div>
                </div>

                <footer class="app-footer">
                    <div class="wrapper">
                        <span class="pull-right">2.1 <a href="#"><i class="fa fa-long-arrow-up"></i></a></span> © 2015 Copyright.
                    </div>
                </footer>
                </body>
                </html>
