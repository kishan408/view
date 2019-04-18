<div class="container">
    <div class="row well">
        <div class="panel panel-primary col-md-6 col-md-offset-3" style="box-shadow:2px 3px 4px gray,3px 4px 4px black,3px 4px 4px gray;">
            <div class="panel-heading">
                <h3 class"panel-title">Change password</h3>
            </div>
            <div class="panel-body">
                <?=form_open()?>
                    <div class="form-group">
                       
                        <div id="at" class="form-group has-feedback">
                            <label>Old Password</label>
                           <input type="password" name="old_p" id="old_p" onblur=" check_pwd()" class="form-control">
                            <i id="feedback" class=" form-control-feedback"></i>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" name="new_p" id="new_p" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_p" id="con_p" class="form-control">
                    </div>
                    <div class="panel-footer" id="footer1" style="display:none;">
                        <button type="button" id="btn1" onclick="update()" class="btn btn-primary center-block" >Update >></button>
                         <button type="button" class="btn btn-primary center-block" style="display:none;" id="wait"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i></button>
                   <button type="button" class="btn btn-success center-block" style="display:none;" id="done">Updated &nbsp;<i class="fa fa-check"></i>&nbsp;</button>
                    </div>
                      <div class="panel-footer" id="footer2">
                        <button type="button" onclick="window.alert('your old password is not validated..')" class="btn btn-primary center-block" >Update >></button>
                    </div>
                <?=form_close()?>
            </div>
        </div>
    </div>
</div>
<script>
    function check_pwd()
    {
        var old_pass=$("#old_p").val();
        jQuery.ajax({
            
            type:"post",
            url:"<?=base_url()?>"+"index.php/admin/check_pass",
            data:{op:old_pass},
            dataType:'html',
            success:function(res)
            {
                
                if(res=="1")
                {
                    $("#feedback").removeClass("fa fa-remove");
                    $("#feedback").addClass("fa fa-check");
                    $("#at").removeClass("has-warning");
                   $("#at").addClass("has-success");
                   $("#footer2").hide();
                   $("#footer1").show();
                }
                else{
                    {
                        $("#feedback").removeClass("fa fa-check");
                    $("#feedback").addClass("fa fa-remove");
                     $("#at").removeClass("has-success");
                     $("#at").addClass("has-warning");
                     $("#footer2").show();
                   $("#footer1").hide();
                }
                }
            }
        });
    }
    
    function update()
    {
        $("#btn1").hide();
        $("#wait").show();
        var new_p=$("#new_p").val();
        var con_p=$("#con_p").val();
        jQuery.ajax({
            type:"post",
            url:"<?=base_url()?>"+"index.php/admin/change_pass",
            data:{new_p:new_p,con_p:con_p},
            dataType:'html',
            success:function(res)
            {
                alert(res);
                 $("#wait").hide();
                $("#done").show();
            }
        });
        
    }
</script>