<?php /* Smarty version Smarty-3.1.18, created on 2017-03-21 10:53:30
         compiled from "views\art.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2493158d02a5c6ef7c5-32536198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d36260ac864f3a0812468999f78dc415b1950cc' => 
    array (
      0 => 'views\\art.tpl',
      1 => 1490090009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2493158d02a5c6ef7c5-32536198',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58d02a5c71fc44_61580994',
  'variables' => 
  array (
    'title' => 0,
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d02a5c71fc44_61580994')) {function content_58d02a5c71fc44_61580994($_smarty_tpl) {?><!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/modaal.css">
    <script src="js/modaalVenster.js"></script>
    <script src="js/modaalStartt.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<div class="art">
<h2>Kunstwerken</h2>
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1 ">
                    Collapsible Group 1</a>
            </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse in">
            <div class="panel-body">
                <<?php ?>?php
                <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
</td>

                    </tr>

                <?php } ?>
                
            </div>

    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                    Collapsible Group 2</a>
            </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
                <img src="https://s3-us-west-1.amazonaws.com/cominsoon-tech/campaign-bg/earth-7251x4018-planet-space-10121.jpg  "class="Artwork" alt="Smiley face" >
                <img src="https://s3-us-west-1.amazonaws.com/cominsoon-tech/campaign-bg/earth-7251x4018-planet-space-10121.jpg  "class="Artwork" alt="Smiley face" >
                <img src="https://s3-us-west-1.amazonaws.com/cominsoon-tech/campaign-bg/earth-7251x4018-planet-space-10121.jpg  "class="Artwork" alt="Smiley face" >
            </div>

        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                    Collapsible Group 3</a>
            </h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body">
                <img src="https://s3-us-west-1.amazonaws.com/cominsoon-tech/campaign-bg/earth-7251x4018-planet-space-10121.jpg  "class="Artwork" alt="Smiley face" >
                <img src="https://s3-us-west-1.amazonaws.com/cominsoon-tech/campaign-bg/earth-7251x4018-planet-space-10121.jpg  "class="Artwork" alt="Smiley face" >
                <img src="https://s3-us-west-1.amazonaws.com/cominsoon-tech/campaign-bg/earth-7251x4018-planet-space-10121.jpg  "class="Artwork" alt="Smiley face" >
            </div>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                    Collapsible Group 4</a>
            </h4>
        </div>
        <div id="collapse4" class="panel-collapse collapse">
            <div class="panel-body">
                <img src="https://s3-us-west-1.amazonaws.com/cominsoon-tech/campaign-bg/earth-7251x4018-planet-space-10121.jpg  "class="Artwork" alt="Smiley face" >
                <img src="https://s3-us-west-1.amazonaws.com/cominsoon-tech/campaign-bg/earth-7251x4018-planet-space-10121.jpg  "class="Artwork" alt="Smiley face" >
                <img src="https://s3-us-west-1.amazonaws.com/cominsoon-tech/campaign-bg/earth-7251x4018-planet-space-10121.jpg  "class="Artwork" alt="Smiley face" >
            </div>

        </div>
    </div>
</div>
</div>
<?php }} ?>
