<?php
/* Smarty version 3.1.29, created on 2016-09-13 10:57:20
  from "/home/matheus/Sites/securebox/src/Template/Layout/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57d7db906f87d9_45075040',
  'file_dependency' => 
  array (
    '586f6d7fa99c6b1fa203f7e93f4e9e1960e634bd' => 
    array (
      0 => '/home/matheus/Sites/securebox/src/Template/Layout/login.tpl',
      1 => 1473764061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d7db906f87d9_45075040 ($_smarty_tpl) {
?>
<head>
    <title>DeaSoft - Serviço de Gerenciamento de Salão de Beleza</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Utils -->

    <?php echo $_smarty_tpl->tpl_vars['this']->value->Html->script(array('/js/toast/src/main/javascript/jquery.toastmessage.js','/login/login.js'));?>



    <?php echo $_smarty_tpl->tpl_vars['this']->value->Html->css(array("/login/login.css"));?>



</head>
<body>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->fetch('content');?>

</body>


<?php }
}
