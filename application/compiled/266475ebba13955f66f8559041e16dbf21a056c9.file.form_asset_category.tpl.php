<?php /* Smarty version Smarty-3.1.7, created on 2018-02-21 07:53:49
         compiled from "C:\wamp64\www\fixed_asset\application\views\form_asset_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:261425a8c21d5d97666-16237437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '266475ebba13955f66f8559041e16dbf21a056c9' => 
    array (
      0 => 'C:\\wamp64\\www\\fixed_asset\\application\\views\\form_asset_category.tpl',
      1 => 1519199625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261425a8c21d5d97666-16237437',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a8c21d5f26cc',
  'variables' => 
  array (
    'action_mode' => 0,
    'direction' => 0,
    'record_id' => 0,
    'errors' => 0,
    'asset_category_fields' => 0,
    'ass_track_data' => 0,
    'asset_category_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c21d5f26cc')) {function content_5a8c21d5f26cc($_smarty_tpl) {?><div class="panel panel-default">
    <div class="panel-body">
        <a href="asset_category" class="btn btn-warning btn-sm"> <i class="fa fa-list" aria-hidden="true"></i>
            Listing</a>
        <a class="<?php if ($_smarty_tpl->tpl_vars['action_mode']->value=='create'){?>active<?php }?> btn btn-sm btn-primary" href="asset_category/create/"> <i
                    class="fa fa-plus" aria-hidden="true"></i> New record</a>
        <?php if ($_smarty_tpl->tpl_vars['action_mode']->value!='create'){?>
            <a class="btn-default btn btn-sm pull-right <?php if (isset($_smarty_tpl->tpl_vars['direction']->value)){?><?php if ($_smarty_tpl->tpl_vars['direction']->value=='right'){?>disabled<?php }?><?php }?>"
               href="asset_category/navigate/right/<?php echo $_smarty_tpl->tpl_vars['record_id']->value;?>
"><i class="fa fa-arrow-right"></i></a>
            <a class="btn-default btn btn-sm pull-right <?php if (isset($_smarty_tpl->tpl_vars['direction']->value)){?><?php if ($_smarty_tpl->tpl_vars['direction']->value=='left'){?>disabled<?php }?><?php }?>"
               href="asset_category/navigate/left/<?php echo $_smarty_tpl->tpl_vars['record_id']->value;?>
"><i class="fa fa-arrow-left"></i></a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['action_mode']->value=='create'){?>
            <h3 class="page-title">Add new record</h3>
        <?php }else{ ?>
            <h3 class="page-title">Edit record: #<?php echo $_smarty_tpl->tpl_vars['record_id']->value;?>
</h3>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['errors']->value)){?>
            <div class="flash">
                <div class="alert alert-danger">
                    <p><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</p>
                </div>
            </div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['direction']->value)){?>
            <div class="flash">
                <div class="alert alert-info">
                    <p>You have reached end of navigation</p>
                </div>
            </div>
        <?php }?>
        <form class="form" method='post' action='asset_category/<?php echo $_smarty_tpl->tpl_vars['action_mode']->value;?>
/<?php if (isset($_smarty_tpl->tpl_vars['record_id']->value)){?><?php echo $_smarty_tpl->tpl_vars['record_id']->value;?>
<?php }?>'
              enctype="multipart/form-data">


            <div class="col-sm-6">

                
                
                
                
                
                

                
                
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cat_status"><?php echo $_smarty_tpl->tpl_vars['asset_category_fields']->value['cat_status'];?>
</label>
                    <div class="col-md-6">
                        
                        
                        
                        

                        <input type="checkbox" value="1" name="cat_status"
                               id="cat_status" <?php if (isset($_smarty_tpl->tpl_vars['ass_track_data']->value)){?><?php if ($_smarty_tpl->tpl_vars['ass_track_data']->value['cat_status']==1){?> checked="checked" <?php }?><?php }?> /></label>
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cat_code"><?php echo $_smarty_tpl->tpl_vars['asset_category_fields']->value['cat_code'];?>
<span
                                class="error">*</span></label>
                    <div class="col-md-6">
                        <input placeholder="Enter <?php echo $_smarty_tpl->tpl_vars['asset_category_fields']->value['cat_code'];?>
" class="form-control" type="text"
                               maxlength="50"
                               value="<?php if (isset($_smarty_tpl->tpl_vars['asset_category_data']->value)){?><?php echo $_smarty_tpl->tpl_vars['asset_category_data']->value['cat_code'];?>
<?php }?>"
                               name="cat_code" id="cat_code"/>
                    </div>

                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label" for="cat_name"><?php echo $_smarty_tpl->tpl_vars['asset_category_fields']->value['cat_name'];?>
<span
                                class="error">*</span></label>
                    <div class="col-md-6">
                        <input placeholder="Enter <?php echo $_smarty_tpl->tpl_vars['asset_category_fields']->value['cat_name'];?>
" class="form-control" type="text"
                               maxlength="50"
                               value="<?php if (isset($_smarty_tpl->tpl_vars['asset_category_data']->value)){?><?php echo $_smarty_tpl->tpl_vars['asset_category_data']->value['cat_name'];?>
<?php }?>"
                               name="cat_name" id="cat_name"/>
                    </div>

                </div>
                
                
                
                
                
                
                
                
                
                

                

            </div>
            <div class="col-sm-6">

                <div class="form-group">
                    <label class="col-md-4 control-label" for="cat_description"><?php echo $_smarty_tpl->tpl_vars['asset_category_fields']->value['cat_description'];?>

                        
                    </label>
                    <div class="col-md-6">
                    <textarea placeholder="Enter <?php echo $_smarty_tpl->tpl_vars['asset_category_fields']->value['cat_description'];?>
"
                              class="form-control" rows="5"
                              cols="50"
                              class="text_area"
                              name="cat_description"
                              id="cat_description"><?php if (isset($_smarty_tpl->tpl_vars['asset_category_data']->value)){?><?php echo $_smarty_tpl->tpl_vars['asset_category_data']->value['cat_description'];?>
<?php }?></textarea>
                    </div>

                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label"
                           for="depriciation_life"><?php echo $_smarty_tpl->tpl_vars['asset_category_fields']->value['depriciation_life'];?>

                        <span class="error">*</span></label>
                    <div class="col-md-6">
                        <input placeholder="Enter <?php echo $_smarty_tpl->tpl_vars['asset_category_fields']->value['depriciation_life'];?>
"
                               class="form-control"
                               id="depLife"
                               type="number"
                               maxlength="50"
                               value="<?php if (isset($_smarty_tpl->tpl_vars['asset_category_data']->value)){?><?php echo $_smarty_tpl->tpl_vars['asset_category_data']->value['depriciation_life'];?>
<?php }?>"
                               name="depriciation_life" id="depriciation_life"/>
                    </div>
                    <br>
                    <div class="col-lg-push-3 col-md-12">
                        <span id="lifeTimError" class="error">Life time must be greater or equal than one</span>

                    </div>

                </div>

            </div>

            <br>
            <div class="form-group button-actions box-footer">
                <div class="col-md-offset-4 col-md-4">
                    <button id="save" class="btn btn-primary" type="submit">Save</button>
                    <span class="text_button_padding">or</span>
                    <a class="btn btn-default" href="javascript:window.history.back();">Cancel</a>
                </div>
        </form>
    </div><!-- .content -->
</div><!-- .block -->

<script>
    $("#lifeTimError").hide();
    $("#depLife").on("change keyup paste click", function () {
        var liftime = $("#depLife").val();
//        var status = $("#cat_status").val();
//        if (status)
        if (liftime < 1) {
            $("#lifeTimError").show();
        }
        else {
            $("#lifeTimError").hide();
        }
    });
</script><?php }} ?>