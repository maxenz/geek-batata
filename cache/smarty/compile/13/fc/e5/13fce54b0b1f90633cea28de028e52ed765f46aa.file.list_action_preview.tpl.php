<?php /* Smarty version Smarty-3.1.19, created on 2016-08-04 19:29:01
         compiled from "C:\xampp\htdocs\prestashop\admin750ud9eju\themes\default\template\helpers\list\list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:668457a3c1ad2fcf83-21937388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13fce54b0b1f90633cea28de028e52ed765f46aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin750ud9eju\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1466013674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '668457a3c1ad2fcf83-21937388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a3c1ad33db59_03836766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a3c1ad33db59_03836766')) {function content_57a3c1ad33db59_03836766($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
