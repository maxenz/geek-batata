<?php /* Smarty version Smarty-3.1.19, created on 2016-08-04 18:27:46
         compiled from "C:\xampp\htdocs\prestashop\admin750ud9eju\themes\default\template\helpers\tree\tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1264257a3b3525da313-62847111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba5834a35926cf251269cd1c7c10df571edce0cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin750ud9eju\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1466013674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1264257a3b3525da313-62847111',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a3b35261fdb0_89862662',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a3b35261fdb0_89862662')) {function content_57a3b35261fdb0_89862662($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
