<!--Basic User Details Starts-->
<section id="user-profile">
  <div class="row">
    <div class="col-12">
      <div class="card profile-with-cover">
        <div class="card-img-top img-fluid bg-cover height-50"></div>
        <div class="profil-cover-details row">
          <div class="col-md-1"></div>

          <div class="col-md-10 text-center">
              <a class="profile-image">

                <?php if (@getimagesize(base_url('uploads/users/'.@$user->image))): ?>

                  <img src="<?=base_url('uploads/users/'.@$user->image)?>" width="200" class="text align-middle img-border width-100" />

                    <?php else: ?>

                  <img src="<?=base_url('app-assets/images/no-image-available.png')?>" width="200" class="text align-middle img-border width-100" />

                <?php endif; ?>

              </a>
          </div>
          <div class="col-md-1">
          </div>
        </div>
        <div class="profile-section">
          <div class="row">
            <div class="col-lg-3 col-md-3 ">
            </div>
            <div class="col-lg-6 col-md-6 text-center">
              <span class="font-medium-2 text-uppercase"><?=@$user->title?>. <?=@$user->username?></span>
              <p class="grey font-small-2">(<?=@$user->role_name?>)</p>
            </div>
            <div class="col-lg-3 col-md-3">
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Basic User Details Ends-->

<!--About section starts-->
<section id="about">
  <div class="row">
    <div class="col-12">
      <div class="content-header"></div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        
        <div class="card-content">
          <div class="card-body">
            <hr>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>Full Name:</a></span>
                    <span class="d-block overflow-hidden"><?=@$user->full_name?></span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>Surename:</a></span>
                    <span class="d-block overflow-hidden"><?=@$user->surename?></span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>Email:</a></span>
                    <span class="d-block overflow-hidden"><?=@$user->email?></span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>Date Of Birth:</a></span>
                    <span class="d-block overflow-hidden"><?=@$user->dob?></span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>Gender:</a></span>
                    <span class="d-block overflow-hidden"><?=@$user->gender?></span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>Cnic / B-form:</a></span>
                    <span class="d-block overflow-hidden"><?=@$user->cnic?></span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>Show Cnic To Public :</a></span>
                    <span class="d-block overflow-hidden"><?=(@$user->show_cnic_public == 1?'Yes':'No')?></span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>Father Name:</a></span>
                    <span class="d-block overflow-hidden"><?=@$user->father_name?></span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>Nationality:</a></span>
                    <span class="d-block overflow-hidden"><?=@$user->nationality?></span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>Province:</a></span>
                    <span class="d-block overflow-hidden"><?=@$user->province?></span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>District:</a></span>
                    <span class="d-block overflow-hidden"><?=@$user->district?></span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>City:</a></span>
                    <span class="d-block overflow-hidden"><?=@$user->city?></span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>Last Qualification:</a></span>
                    <span class="d-block overflow-hidden"><?=@$user->last_qualification?></span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>Zip Code:</a></span>
                    <span class="d-block overflow-hidden"><?=@$user->zip_code?></span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>Home Address:</a></span>
                    <span class="d-block overflow-hidden"><?=@$user->home_address?></span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>Permanent Address:</a></span>
                    <span class="d-block overflow-hidden"><?=@$user->permanent_address?></span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>Show Address To Public :</a></span>
                    <span class="d-block overflow-hidden"><?=(@$user->show_address_public == 1?'Yes':'No')?></span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>Bio :</a></span>
                    <span class="d-block overflow-hidden"><?=@$user->bio?></span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>Phone Number Code :</a></span>
                    <span class="d-block overflow-hidden"><?=@$user->phone_no_code?></span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>Phone Number :</a></span>
                    <span class="d-block overflow-hidden"><?=@$user->phone_no?></span>
                  </li>
                </ul>
              </div>
              
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a>Show Phone Number Public :</a></span>
                    <span class="d-block overflow-hidden"><?=(@$user->show_phone_no_public == 1?'Yes':'No')?></span>
                  </li>
                </ul>
              </div>

             </div>
            <hr>

          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5> Additional Info </h5>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="row">

              

                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <ul class="no-list-style">

                    <li class="mb-2">
                      <span class="text-bold-500 primary"><a> Campus:</a></span>
                      <a class="d-block overflow-hidden"><?=@$user->campus_id?></a>
                    </li>


                  </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <ul class="no-list-style">

                    <li class="mb-2">
                      <span class="text-bold-500 primary"><a> Faculty:</a></span>
                      <a class="d-block overflow-hidden"><?=@$user->faculty_id?></a>
                    </li>


                  </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <ul class="no-list-style">

                    <li class="mb-2">
                      <span class="text-bold-500 primary"><a> Department:</a></span>
                      <a class="d-block overflow-hidden"><?=@$user->depart_id?></a>
                    </li>


                  </ul>
                </div>

                <?php if(@$user->type == 'STUDENT'): ?>
                
                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <ul class="no-list-style">

                    <li class="mb-2">
                      <span class="text-bold-500 primary"><a> Program:</a></span>
                      <a class="d-block overflow-hidden"><?=@$user->program_id?></a>
                    </li>


                  </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <ul class="no-list-style">

                    <li class="mb-2">
                      <span class="text-bold-500 primary"><a> Batch Year:</a></span>
                      <a class="d-block overflow-hidden"><?=@$user->batch_year?></a>
                    </li>


                  </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <ul class="no-list-style">

                    <li class="mb-2">
                      <span class="text-bold-500 primary"><a> Current Semester No:</a></span>
                      <a class="d-block overflow-hidden"><?=@$user->current_semester?></a>
                    </li>


                  </ul>
                </div>

                <?php endif; ?>
                
                <?php if(@$user->type == 'TEACHER'): ?>
                
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <ul class="no-list-style">

                    <li class="mb-2">
                      <span class="text-bold-500 primary"><a>Designation:</a></span>
                      <a class="d-block overflow-hidden"><?=@$user->designation?></a>
                    </li>


                  </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <ul class="no-list-style">

                    <li class="mb-2">
                      <span class="text-bold-500 primary"><a> Speciality:</a></span>
                      <a class="d-block overflow-hidden"><?=@$user->speciality?></a>
                    </li>


                  </ul>
                </div>
              
                <?php endif; ?>
                <?php if(@$user->type == 'OTHER'): ?>

                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <ul class="no-list-style">

                    <li class="mb-2">
                      <span class="text-bold-500 primary"><a>Job Title:</a></span>
                      <a class="d-block overflow-hidden"><?=@$user->job_title?></a>
                    </li>


                  </ul>
                </div>
                <?php endif; ?>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--About section ends-->
