<?php /* Smarty version Smarty-3.1.18, created on 2016-11-23 11:28:38
         compiled from "views\cms_show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2526358356a52ae5937-97360820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cab15a3e175bcabfae184e3e5bdcdb4b96c17c4f' => 
    array (
      0 => 'views\\cms_show.tpl',
      1 => 1479896917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2526358356a52ae5937-97360820',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58356a52b33886_76535050',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58356a52b33886_76535050')) {function content_58356a52b33886_76535050($_smarty_tpl) {?><table>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
       <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</td>
            <td><a href="?action=admin&cms_action=edit">edit</a></td>
            <td><a href="?action=admin&cms_action=delete&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">delete</a></td>
       </tr>
       
    <?php } ?>
</table>

<?php }} ?>
