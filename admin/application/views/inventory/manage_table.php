<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
    <table class="table">
        
     
      <?php
       if(isset($rows)){
        
        foreach ($rows as $key => $row) {
          if($row->column_name == 'user_id'){
            $row->column_name = 'username';
          }
          if($row->column_name == 'lab_id'){
            continue;
          }
          
          ?>
            
           <tr>
        
           <th><?= __($row->column_name.'_row') ?></th>
           <input type="hidden" name="<?=$row->column_name?>" value="0" />
           <td><input type="checkbox" name="<?=$row->column_name?>" value="1" <?=@($row->is_allowed==1)?'checked':''?>></td>        
           </tr>             

          <?php
        }


       }

      ?>



        
    </table>
    <input type="hidden" name="table_manager_id" value="<?= (@$rows[0]->table_manager_id!=null)?@$rows[0]->table_manager_id:'' ?>"/>
  </div>
</div>
