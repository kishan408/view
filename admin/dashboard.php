
<div class="container">
    <div class="row">
        <legend>USER MANAGMENT SYSTEM</legend>
        <span style="color:red;"><strong>*NOTE :- </strong> Please refresh the page to see your result *</span>
        <br><br>
        
        <?php
        if($name!='')
        {
            ?><div class="well text-center" style="font-size:17px;">Referred By :- <strong><?=$name?></strong></div><?php
        }
        foreach($users as $us)
        {
        ?>
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?=$us->displayname?></h2>
            </div>
            <div class="panel-body">
                <strong>Email :- </strong> <?=$us->email?><br>
                <strong>Photourl :- </strong> <?=$us->photourl?><br>
                <div class="row">
                    <div class="col-md-6"><strong> Bonus :- </strong> <?=$us->bonus?>,</div>
                    <div class="col-md-6"><strong> Bonuspaid :- </strong> <?=$us->bonuspaid?></div>
                </div>
                <div class="row">
                    <div class="col-md-12"><strong>Referby :- </strong> <?=$us->referby?></div>
                    
                </div>
                
                <div class="row">
                    <div class="col-md-6"><strong> ReferPoint :- </strong> <?=$us->referpoint?>,</div>
                    <div class="col-md-6"><strong> Referpoint paid :- </strong> <?=$us->referpointpaid?></div>
                </div>
                <div class="row">
                    <div class="col-md-12"><strong> Uid :- </strong> <?=$us->uid?></div>
                    
                </div>
                <div class="row">
                    <div class="col-md-6"><strong> Approvel :- </strong> <?=$us->waitingforapprovel?></div>
                    <div class="col-md-6"><strong> Suspend :- </strong> <?=$us->suspend?></div>
                </div>
                <br><br>
                <div class="row text-center">
                     <div class="col-md-6"><strong> Paid :- </strong><b style="font-size:19px;"> <?=$us->paid?></b></div>
                    <div class="col-md-6"><strong> Total referred  :- </strong> <a style="font-size:27px;" href="<?=base_url()?>index.php/admin/all_users?id=<?=$us->id?>&name=<?=$us->displayname?>" id="ref<?php echo $us->id; ?>"><i style="display:none;" id="waits<?php echo $us->id; ?>" class="fa fa-spinner fa-spin" style="font-size:24px"></i></a></div>
                   
                </div>
               <script>
                   var idd="<?php echo $us->id; ?>";
                     
                                
                                   
                                    $("#waits<?=$us->id?>").show();
                                  jQuery.ajax({
                                     type:"POST",
                                     url:"<?=base_url()?>"+"index.php/ajax/refer_count",
                                     data:{id:idd},
                                     dataType:"html",
                                     success:function(res)
                                     {
                                         
                                           $("#waits<?=$us->id?>").hide();
                                           $("#ref<?=$us->id?>").html(res);
                                    
                                     }
                                  });
                                
                                
                   
               </script>
                
            </div>
            <div class="panel-footer">
                <div class="row">
                   <div class="col-md-6"> 
                   <?php
                   if($us->suspend=='N')
                   {
                   ?>
                   <button type="button" class="btn btn-warning center-block" id="btn<?php echo $us->id; ?>" onclick="suspend_fun(<?=$us->id?>)">  <i class="fa fa-exclamation-triangle"></i>&nbsp;Suspend</button>
                   <button type="button" class="btn btn-primary center-block" style="display:none;" id="wait<?php echo $us->id; ?>"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i></button>
                   <button type="button" class="btn btn-danger center-block" style="display:none;" id="done<?php echo $us->id; ?>"><i class="fa fa-exclamation-triangle"></i>&nbsp;</button>
                   <?php
                   }
                   else{
                      ?>
                   <button type="button" class="btn btn-primary center-block" id="btn<?php echo $us->id; ?>" onclick="unsuspend_fun(<?=$us->id?>)">  <i class="fa fa-exclamation-triangle"></i>&nbsp;Unsuspend</button>
                   <button type="button" class="btn btn-primary center-block" style="display:none;" id="wait<?php echo $us->id; ?>"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i></button>
                   <button type="button" class="btn btn-success center-block" style="display:none;" id="done<?php echo $us->id; ?>"><i class="fa fa-check"></i>&nbsp;</button>
                   <?php 
                   }
                   ?>
                   
                   </div>
                    <div class="col-md-6"><button type="button" class="btn btn-danger center-block" id="d_btn<?php echo $us->id; ?>" onclick="delete_fun(<?=$us->id?>)"><i class="fa fa-trash"></i>&nbsp;Delete</button>
                    <button type="button" style="display:none;" id="d_wait<?php echo $us->id; ?>" class="btn add-btn btn-primary center-block" ><i class="fa fa-spinner fa-spin"></i></button>
						<button type="button" style="display:none;" id="d_done<?php echo $us->id; ?>" class="btn add-btn btn-default center-block" ><i class="fa fa-ban"></i></button>
                    </div>
                </div>
                
                </div>
        </div>
        
        
        
        <?php } ?>
    </div>
    
    <script>

        function suspend_fun(str)
        {
          
            $("#btn"+str).hide();
            $("#wait"+str).show();
          jQuery.ajax({
             type:"POST",
             url:"<?=base_url()?>"+"index.php/ajax/suspend",
             data:{id:str},
             dataType:"html",
             success:function(res)
             {
                   $("#wait"+str).hide();
            $("#done"+str).show();
             }
          });
        
        }
        function unsuspend_fun(str)
        {
          
            $("#btn"+str).hide();
            $("#wait"+str).show();
          jQuery.ajax({
             type:"POST",
             url:"<?=base_url()?>"+"index.php/ajax/unsuspend",
             data:{id:str},
             dataType:"html",
             success:function(res)
             {
                   $("#wait"+str).hide();
            $("#done"+str).show();
             }
          });
        
        }
        
        function delete_fun(str)
        {
             $("#d_btn"+str).hide();
            $("#d_wait"+str).show();
            jQuery.ajax({
              type:"POST" ,
              url:"<?=base_url()?>"+"index.php/ajax/delete",
              data:{id:str},
              dataType:"html",
              success:function(res)
              {
                    $("#d_wait"+str).hide();
            $("#d_done"+str).show();
              }
            });
        }
    </script>
</div>