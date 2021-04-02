<div class="main-content">

  <div class="content-wrapper"><!--Statistics cards Starts-->

      <div class="row">

        <div class="col-sm-12">

          <div class="card">

            <div class="card-header">
              <h4 class="card-title"><?=$title?> </h4>
            </div> <br><br>
            <div class="row">
              <div class="col-md-8"></div>
              <div class="col-md-4"></div>

            </div>
            <div class="card-body">

              <div class="card-block mcontainer">

                <?php if($this->session->flashdata('response') == 'success') { ?>

                  <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?=$this->session->flashdata('msg')?>
                  </div>
                <?php } ?>
                <input type="hidden" class="status" value="<?=$status?>">
                
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover table-checkable order-column display checkboxeshere" id="DataTable" style="width:100%">
                      <thead>
                          <tr>
                              

                              <th width="100px">SNo.</th>
                              <th>Title </th>
                              <th>Username </th>
                              <th>Email </th>
                              <th>Full Name </th>
                              <th>Cnic </th>
                              <th>Phone Number</th>
                              <th>Gender </th>
                              <th>Type </th>

                              <th width="150px">Actions</th>

                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                  </table>
                </div>
                <div class="clearfix">

                </div>
              </div>

            </div>

          </div>

        </div>

      </div>

  
