<?php /* Smarty version Smarty-3.1.19, created on 2016-08-04 23:19:45
         compiled from "C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\not_found\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30757a3b1717fc593-76950849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e30019e099025aecfbfe17c36f1156b7d2dab66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\not_found\\content.tpl',
      1 => 1466013674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30757a3b1717fc593-76950849',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a3b17180d5e6_12761607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a3b17180d5e6_12761607')) {function content_57a3b17180d5e6_12761607($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['controller']->value)&&!empty($_smarty_tpl->tpl_vars['controller']->value)&&$_smarty_tpl->tpl_vars['controller']->value!='adminnotfound') {?>
	<h1><?php echo smartyTranslate(array('s'=>'The controller %s is missing or invalid.','sprintf'=>$_smarty_tpl->tpl_vars['controller']->value),$_smarty_tpl);?>
</h1>
<?php }?>
<a class="btn btn-default" href="javascript:window.history.back();">
	<i class="icon-arrow-left"></i>
	<?php echo smartyTranslate(array('s'=>'Back to the previous page'),$_smarty_tpl);?>

</a>
<a class="btn btn-default" href="index.php">
	<i class="icon-dashboard"></i>
	<?php echo smartyTranslate(array('s'=>'Go to the dashboard'),$_smarty_tpl);?>

</a><?php }} ?>
