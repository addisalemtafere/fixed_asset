<?php /* Smarty version Smarty-3.1.7, created on 2018-02-09 19:58:42
         compiled from "C:\wamp64\www\fixed_asset\application\views\form_ass_track.tpl" */ ?>
<?php /*%%SmartyHeaderCode:266075a7822e998f3b4-45331492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e60a1a2aec650d50dfa40e771ec81ff5e92a393' => 
    array (
      0 => 'C:\\wamp64\\www\\fixed_asset\\application\\views\\form_ass_track.tpl',
      1 => 1518206319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266075a7822e998f3b4-45331492',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a7822e9be82f',
  'variables' => 
  array (
    'action_mode' => 0,
    'direction' => 0,
    'record_id' => 0,
    'errors' => 0,
    'ass_track_fields' => 0,
    'ass_track_data' => 0,
    'related_asset' => 0,
    'rel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7822e9be82f')) {function content_5a7822e9be82f($_smarty_tpl) {?><div class="panel panel-default">
    <div class="panel-body">
        <a href="ass_track" class="btn btn-warning btn-sm"> <i class="fa fa-list" aria-hidden="true"></i> Listing</a>
        <a class="<?php if ($_smarty_tpl->tpl_vars['action_mode']->value=='create'){?>active<?php }?> btn btn-sm btn-success" href="ass_track/create/"> <i
                    class="fa fa-plus" aria-hidden="true"></i> New record</a>
        <?php if ($_smarty_tpl->tpl_vars['action_mode']->value!='create'){?>
            <a class="btn-default btn btn-sm pull-right <?php if (isset($_smarty_tpl->tpl_vars['direction']->value)){?><?php if ($_smarty_tpl->tpl_vars['direction']->value=='right'){?>disabled<?php }?><?php }?>"
               href="ass_track/navigate/right/<?php echo $_smarty_tpl->tpl_vars['record_id']->value;?>
"><i class="fa fa-arrow-right"></i></a>
            <a class="btn-default btn btn-sm pull-right <?php if (isset($_smarty_tpl->tpl_vars['direction']->value)){?><?php if ($_smarty_tpl->tpl_vars['direction']->value=='left'){?>disabled<?php }?><?php }?>"
               href="ass_track/navigate/left/<?php echo $_smarty_tpl->tpl_vars['record_id']->value;?>
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
        <form class="form" method='post' action='ass_track/<?php echo $_smarty_tpl->tpl_vars['action_mode']->value;?>
/<?php if (isset($_smarty_tpl->tpl_vars['record_id']->value)){?><?php echo $_smarty_tpl->tpl_vars['record_id']->value;?>
<?php }?>'
              enctype="multipart/form-data">

            <div class="col-sm-12">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-md-4 control-label"
                               for="actionType">Select type<span
                                    class="error">*</span></label>
                        <div class="col-md-6">
                            <select class="form-control field select " name="status" id="status"
                                    required="required">
                                <option value="">Select One</option>
                                <option value="transfer">Asset Transfer</option>
                                <option value="return">Asset Return</option>

                            </select>
                        </div>

                    </div>
                </div>
            </div>
            <div id="formContainer" class="col-sm-12">
                <div class="col-sm-6">

                    <div id="dateTransferred" class="form-group">
                        <label class="col-md-4 control-label"
                               for="date_trasferred"><?php echo $_smarty_tpl->tpl_vars['ass_track_fields']->value['date_trasferred'];?>

                            <span class="error">*</span>
                        </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input placeholder="Enter <?php echo $_smarty_tpl->tpl_vars['ass_track_fields']->value['date_trasferred'];?>
"
                                       class="date-picker form-control"
                                       type="text"

                                       maxlength="50"
                                       value="<?php if (isset($_smarty_tpl->tpl_vars['ass_track_data']->value)){?><?php echo $_smarty_tpl->tpl_vars['ass_track_data']->value['date_trasferred'];?>
<?php }?>"
                                       name="date_trasferred"
                                       id="date_trasferred"/>
                                <label for="date"
                                       class="input-group-addon btn group-white">
                                    <span class="glyphicon glyphicon-calendar">
                                    </span>
                            </div>
                        </div>

                    </div>

                    <div id="dateReturned" class="form-group">
                        <label class="col-md-4 control-label"
                               for="date_returned"><?php echo $_smarty_tpl->tpl_vars['ass_track_fields']->value['date_returned'];?>

                            <span class="error">*</span>
                        </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input placeholder="Enter <?php echo $_smarty_tpl->tpl_vars['ass_track_fields']->value['date_returned'];?>
"
                                       class="form-control date-picker"
                                       type="text"
                                       maxlength="50"
                                       value="<?php if (isset($_smarty_tpl->tpl_vars['ass_track_data']->value)){?><?php echo $_smarty_tpl->tpl_vars['ass_track_data']->value['date_returned'];?>
<?php }?>"
                                       name="date_returned" id="date_returned"/>
                                <label for="date_returned"
                                       class="input-group-addon btn group-white">
                                    <span class="glyphicon glyphicon-calendar">
                                    </span>
                            </div>
                        </div>

                    </div>


                    <div class="form-group">
                        <label class="col-md-4 control-label"
                               for="Asset_ass_id"><?php echo $_smarty_tpl->tpl_vars['ass_track_fields']->value['receiving_employee_id'];?>

                            <span
                                    class="error">*</span></label>
                        <div class="col-md-6">
                            <input placeholder="Enter <?php echo $_smarty_tpl->tpl_vars['ass_track_fields']->value['receiving_employee_id'];?>
" class="form-control"
                                   type="text"
                                   required="required"
                                   maxlength="50"
                                   value="<?php if (isset($_smarty_tpl->tpl_vars['ass_track_data']->value)){?><?php echo $_smarty_tpl->tpl_vars['ass_track_data']->value['receiving_employee_id'];?>
<?php }?>"
                                   name="receiving_employee_id"
                                   id="receiving_employee_id"/>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Asset_ass_id"><?php echo $_smarty_tpl->tpl_vars['ass_track_fields']->value['ass_emp_id'];?>
<span
                                    class="error">*</span></label>
                        <div class="col-md-6">
                            <input placeholder="Enter <?php echo $_smarty_tpl->tpl_vars['ass_track_fields']->value['ass_emp_id'];?>
"
                                   required="required"
                                   class="form-control" type="text"
                                   maxlength="50" value="<?php if (isset($_smarty_tpl->tpl_vars['ass_track_data']->value)){?><?php echo $_smarty_tpl->tpl_vars['ass_track_data']->value['ass_emp_id'];?>
<?php }?>"
                                   name="ass_emp_id"
                                   id="ass_emp_id"/>
                        </div>

                    </div>

                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['ass_track_fields']->value['payment_status'];?>
</label>
                        <div class="col-md-6">
                            <label class="form-control">
                                <input type="checkbox" value="1" name="payment_status"
                                       id="payment_status" <?php if (isset($_smarty_tpl->tpl_vars['ass_track_data']->value)){?><?php if ($_smarty_tpl->tpl_vars['ass_track_data']->value['payment_status']==1){?> checked="checked" <?php }?><?php }?> /></label>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label"
                               for="payment_date"><?php echo $_smarty_tpl->tpl_vars['ass_track_fields']->value['payment_date'];?>

                            
                        </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input placeholder="Enter <?php echo $_smarty_tpl->tpl_vars['ass_track_fields']->value['payment_date'];?>
"
                                       class="form-control date-picker"
                                       type="text"
                                       maxlength="50"
                                       value="<?php if (isset($_smarty_tpl->tpl_vars['ass_track_data']->value)){?><?php echo $_smarty_tpl->tpl_vars['ass_track_data']->value['payment_date'];?>
<?php }?>"
                                       name="payment_date" id="payment_date"/>
                                <label for="payment_date"
                                       class="input-group-addon btn group-white">
                                    <span class="glyphicon glyphicon-calendar">
                                    </span>
                            </div>
                        </div>

                    </div>
                    <input type="text" name="reciverHiddenId" id="reciverHiddenId" style="display: none;">
                    <input type="text" name="employeHiddenId" id="employeHiddenId" style="display: none;">

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Asset_ass_id"><?php echo $_smarty_tpl->tpl_vars['ass_track_fields']->value['Asset_ass_id'];?>
<span
                                    class="error">*</span></label>
                        <div class="col-md-6">
                            <select class="form-control field select addr" name="Asset_ass_id" id="Asset_ass_id"
                                    required="required">
                                <option value="">Select One</option>
                                <?php  $_smarty_tpl->tpl_vars['rel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_asset']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rel']->key => $_smarty_tpl->tpl_vars['rel']->value){
$_smarty_tpl->tpl_vars['rel']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['rel']->value['asset_id'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['ass_track_data']->value)){?><?php if ($_smarty_tpl->tpl_vars['ass_track_data']->value['Asset_ass_id']==$_smarty_tpl->tpl_vars['rel']->value['asset_id']){?> selected="selected"<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['rel']->value['asset_name'];?>
</option>
                                <?php } ?>
                            </select>
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
    </div>
</div><!-- .content -->
</div><!-- .block -->



<script type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>




</body>
<script>
    $(function () {
        $('#formContainer').hide();

        $('#status').change(function () {
            var type = $('#status').val();
            if (type == 'transfer') {
                $('#formContainer').show();
                $('#dateReturned').hide();
                $('#dateReturned').val() == '';
                $('#dateTransferred').show();
                $('#save').prop('disabled', false);

            }
            else if (type == 'return') {
                $('#formContainer').show();
                $('#dateReturned').show();
                $('#dateTransferred').hide();
                $('#dateTransferred').val() == "";
                $('#save').prop('disabled', false);
            }
            else {
                $('#formContainer').hide();
                $('#save').prop('disabled', true);


            }

        });


    });

    $(function () {
        $(".date-picker").datepicker({
            format: "yyyy-mm-dd",

        });
    });


    var fullName = [];
    $.ajax({
        type: 'GET',
        url: "http://localhost/fixed_asset/ass_track/searchEmployeeForAutocomplete",
//        data: data,
        dataType: 'json',
        success: function (result) {
//            for (i = 0; i < result.length; i++) {
//                //req[i] = result[i].firstName + "  " + result[i].lastName;
//            }
            console.log(result);
            $("#ass_emp_id").autocomplete({
                //   source: url,
                source: result,
                select: function (event, ui) {
                    //  $("#txtAllowSearch").val(ui.item.value); // display the selected text
                    $("#employeHiddenId").val(ui.item.id); // save selected id to hidden input
                }
            });
            $("#receiving_employee_id").autocomplete({
                source: result,
                select: function (event, ui) {
                    // $("#txtAllowSearch").val(ui.item.value); // display the selected text
                    $("#reciverHiddenId").val(ui.item.id); // save selected id to hidden input
                }
            });
            console.log(fullName);
//            return;
        },
        error: function (jqXHR, textStatus, errorThrown) {

            error({
                jqXHR: jqXHR,
                textStatus: textStatus,
                errorThrown: errorThrown
            });
        }
    });


    

    
    
    
    
    
    
    
    //    });
</script>


<?php }} ?>