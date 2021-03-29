<!--Basic User Details Starts-->
<section id="user-profile">
  <div class="row">
    
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header" style="padding:none!important;">

        </div>
        <div class="card-content">
          <div class="card-body">
            <hr>
            <div class="row">

              <div class="col-md-12">
                <table class="table">
                  <tr>
                    <th><?=__('sno_txt')?></th>        
                   <?php
       if(isset($rows)){
        
        foreach ($rows as $key => $row) {
          ?>
            
           
          <th><?= __($row->column_name.'_row') ?></th>        
                  

          <?php
        }


       }

      ?>



                  </tr>
                  <?php if (count($storage) > 0): ?>

                    <?php $i=1; foreach ($storage as $key => $v): ?>
                  
                  <?php $i++; endforeach; ?>
                <?php else: ?>
                  <tr>
                    <td colspan="3"><?=__('no_program_found_txt')?>...</td>
                  </tr>
                <?php endif; ?>
                </table>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>

    </div>
  </div>
</section>
<!--About section ends-->
