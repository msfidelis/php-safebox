<?php
/* Smarty version 3.1.29, created on 2016-09-13 10:57:20
  from "/home/matheus/Sites/securebox/src/Template/Users/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57d7db906e0a58_47847152',
  'file_dependency' => 
  array (
    '42a4cae398bfdae14c323c50df983c6b0fbf371f' => 
    array (
      0 => '/home/matheus/Sites/securebox/src/Template/Users/login.tpl',
      1 => 1473764061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d7db906e0a58_47847152 ($_smarty_tpl) {
?>
<div class="login-page">
  <div class="form">
    <form class="login-form" action="/users/login" method="post">
      <input type="email" name="email" placeholder="Email"/>
      <input type="password" name="password" placeholder="Password"/>
      <button>login</button>
    </form>
  </div>
</div><?php }
}
