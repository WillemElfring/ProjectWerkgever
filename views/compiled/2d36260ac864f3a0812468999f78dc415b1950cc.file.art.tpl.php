<?php /* Smarty version Smarty-3.1.18, created on 2017-04-11 10:28:13
         compiled from "views\art.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2493158d02a5c6ef7c5-32536198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d36260ac864f3a0812468999f78dc415b1950cc' => 
    array (
      0 => 'views\\art.tpl',
      1 => 1491899292,
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
    'getAlbum' => 0,
    'album' => 0,
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/modaal.css">
    <link rel="stylesheet" type="text/css" href="css/modaalCss.css">
    <script src="js/modaalVenster.js"></script>
    <script src="js/modaalStartt.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<div class="art">
<h2>Art</h2>

<div class="panel-group" id="accordion">






    <div class="panel panel-default">
        <?php  $_smarty_tpl->tpl_vars['album'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['album']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['getAlbum']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['album']->key => $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->_loop = true;
?>

        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
 ">
                      <?php echo $_smarty_tpl->tpl_vars['album']->value['name'];?>
</a>
            </h4>
        </div>


        <div id="collapse<?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
" class="panel-collapse collapse">
            <div class="panel-body">

                <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['album']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
                    <tr>

                        <td>


                            
                                <img style="width:30%;cursor:zoom-in"
                                     onclick="document.getElementById('modal0<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
').style.display='block'"
                                     class="Art_img" src="art/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
">




                        </td>

                        
                            
                            

                                
                                
                                    
                                    
                                
                                


                                
                                

                                
                                    
                                

                                

                                
                                    
                                
                                
                            
                        








                        <div id="modal0<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
" class="w3-modal" onclick="this.style.display='none'">
                            <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                            <div class="w3-modal-content w3-animate-zoom">
                                <img src="art/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" style="width:100%">
                                <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</h1>
                                </div>

                            </div>

                      </tr>



                        <?php } ?>

            </div>

    </div>

        <?php } ?>


<script src="js/modaal2.js"></script>

            </div>
        </div>
    </div>
    <a href="#0" class="cd-top">Top</a>
    <script src="js/back.js"></script>



<?php }} ?>
