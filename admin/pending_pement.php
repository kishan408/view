<div class="container">
    <div class="row">
        <legend>Pending pyments</legend>
        <div class="table-responsive">
            <table class="table table-condensed table-striped">
                <tr>
                    <th>Sr No</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>Refer by</th>
                    <th>UID</th>
                    <th>Approvel</th>
                    <th>Suspend</th>
                    <th>Paid</th>
                    <th></th>
                </tr>
                <?php
                static $count=1;
                foreach($data as $dt)
                {
                ?>
                <tr>
                    <td><?=$count?></td>
                    <td><?=$dt->displayname?></td>
                    <td><?=$dt->email?></td>
                    <td><?=$dt->referby?></td>
                    <td><?=$dt->uid?></td>
                    <td><?=$dt->waitingforapprovel?></td>
                    <td><?=$dt->suspend?></td>
                    <td><?=$dt->paid?></td>
                    <td><button type="button" class="btn btn-success" id="btn" onclick="paid(<?=$dt->id?>)">Paid</button>
                     <button type="button" class="btn btn-primary center-block" style="display:none;" id="wait"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i></button>
                    <button type="button" class="btn btn-success center-block" style="display:none;" id="done"><i class="fa fa-check"></i>&nbsp;</button>
                    
                    </td>
                </tr>
                <?php 
                $count=$count+1;
                } ?>
            </table>
        </div>
    </div>
</div>

<script>
    function paid(str)
        {
          
            $("#btn").hide();
            $("#wait").show();
          jQuery.ajax({
             type:"POST",
             url:"<?=base_url()?>"+"index.php/ajax/paid",
             data:{id:str},
             dataType:"html",
             success:function(res)
             {
                   $("#wait").hide();
            $("#done").show();
             }
          });
        
        }
</script>