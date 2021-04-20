<link rel="stylesheet" href="<?=base_url('assets/css/timetable.css')?>">
<!--Basic Table Starts-->
<section id="simple-table">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <a href="#" class="btn btn-success pull-right"><i class="fa fa-save"></i> Save</a>
          <a href="#" class="btn btn-secondary pull-right mr-2"><i class="icon-drawer"></i> Save as Draft</a>
          <a href="#" class="btn btn-link  mr-2"><i class="ft-arrow-left"></i> Go Back</a>
          <h4 class="card-title">Create New Timetable</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="row padded">
              <div class="col-md-2 ">
                <div class="form-group">
                  <label>Campus</label>
                  <select class="form-control" name="campus">
                    <option value="all"> -- All / General -- </option>

                  </select>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label>Faculty</label>
                  <select class="form-control" name="campus">
                    <option value="all"> -- All / General -- </option>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label>Department</label>
                  <select class="form-control" name="campus">
                    <option value="all"> -- All / General -- </option>
                  </select>
                </div>
              </div>
              <!-- <div class="col-md-2">
                <div class="form-group">
                  <label>Program</label>
                  <select class="form-control" name="campus">
                    <option value="all"> -- All / General -- </option>
                  </select>
                </div>
              </div> -->
              <div class="col-md-2">
                <div class="form-group">
                  <label>Semester</label>
                  <select class="form-control" name="campus">
                    <option value="all"> -- All / General -- </option>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label>Year</label>
                  <select class="form-control" name="campus">
                    <option value="all"> -- All / General -- </option>
                  </select>
                </div>
              </div>

              <div class="col-md-2">
                <div class="form-group">
                  <label>For</label> <br />
                  <input type="radio" name="tt_for" value="Morning" id="tt_morning"> <label for="tt_morning">Morning</label>
                  <input type="radio" name="tt_for" value="Evening" id="tt_evening"> <label for="tt_evening">Evening</label>
                  <input type="radio" name="tt_for" value="Both" id="tt_both"> <label for="tt_both">Both</label>
                </div>
              </div>

            </div>


          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="alert alert-secondary">
        <i class="fa fa-info-circle"></i> <strong>Drag and drop from bottom</strong> If two classes are taken by the same Teacher then keep the same values in both left and right cell. The System will automatically merge those cells when showing or sending Timetable.
      </div>
      <div class="card mb-0">
        <div class="card-content ">
          <div class="card-body">
            <div class="">
              <table class="table table-hovered table-stripped table-bordered tt_timetable">
                <tr>
                  <td></td>
                  <td>2:00 - 2:45</td>
                  <td>2:45 - 3:30</td>
                  <td>3:30 - 4:15</td>
                  <td>4:15 - 5:00</td>
                  <td>5:00 - 5:45</td>
                  <td>5:45 - 6:30</td>
                  <td>6:30 - 7:15</td>
                </tr>
                <tr>
                  <th>Monday</th>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                </tr>
                <tr>
                  <th>Tuesday</th>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                </tr>
                <tr>
                  <th>Wednesday</th>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                </tr>
                <tr>
                  <th>Thursday</th>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                </tr>
                <tr>
                  <th>Friday</th>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                  <td class="addable droppable"></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-content">
          <div class="card-body bordered">
            <div class="">
              <div class="teacher-searchbar col-md-12">
                <p class="">Drag & Drop <strong>Teachers</strong> from here</p>
                <input type="text" placeholder="Search" class="form-control round">
                <a href="#" class="btn-default"><div class="form-control-position"><i class="ft-search"></i></div></a>
              </div>
              <div class="teacher-cards-container">
                <div class="teacher-card draggable" draggable="true" >
                  <!-- <div class="tc-left">
                    <img src="app-assets/img/portrait/small/avatar-s-3.png" class="rounded-circle width-50 mr-2">
                  </div> -->
                  <!-- <div class="tc-right"> -->
                    <p class="text-lg teacher-name">Sir Kamran Taj</p>
                    <!-- <p class="text-sm badge badge-primary">Professor</p> -->
                  <!-- </div> -->
                </div>
                <div class="teacher-card draggable" draggable="true" >
                  <p class="text-lg teacher-name">Sir Kamran Taj</p>
                </div>
                <div class="teacher-card draggable" draggable="true" >
                  <p class="text-lg teacher-name">Sir Kamran Taj</p>
                </div>
                <div class="teacher-card draggable" draggable="true" >
                  <p class="text-lg teacher-name">Sir Kamran Taj</p>
                </div>
                <div class="teacher-card draggable" draggable="true" >
                  <p class="text-lg teacher-name">Sir Kamran Taj</p>
                </div>
                <div class="teacher-card draggable" draggable="true" >
                  <p class="text-lg teacher-name">Sir Kamran Taj</p>
                </div>
                <div class="teacher-card draggable" draggable="true" >
                  <p class="text-lg teacher-name">Sir Kamran Taj</p>
                </div>
                <div class="teacher-card draggable" draggable="true" >
                  <p class="text-lg teacher-name">Sir Kamran Taj</p>
                </div>
                <div class="teacher-card draggable" draggable="true" >
                  <p class="text-lg teacher-name">Sir Kamran Taj</p>
                </div>
                <div class="teacher-card draggable" draggable="true" >
                  <p class="text-lg teacher-name">Sir Kamran Taj</p>
                </div>
                <div class="teacher-card draggable" draggable="true" >
                  <p class="text-lg teacher-name">Sir Kamran Taj</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card">
        <div class="card-content">
          <div class="card-body bordered">
            <div class="">
              <div class="teacher-searchbar col-md-12">
                <p class="">Drag & Drop <strong>Subjects</strong> from here</p>
                <input type="text" placeholder="Search" class="form-control round">
                <a href="#" class="btn-default"><div class="form-control-position"><i class="ft-search"></i></div></a>
              </div>
              <div class="teacher-cards-container">
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">SENG-616</p>
                  <p class="text-sm badge badge-default">Distributed Computing</p>
                </div>
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">SENG-616</p>
                  <p class="text-sm badge badge-default">Distributed Computing</p>
                </div>
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">SENG-616</p>
                  <p class="text-sm badge badge-default">Distributed Computing</p>
                </div>
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">SENG-616</p>
                  <p class="text-sm badge badge-default">Distributed Computing</p>
                </div>
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">SENG-616</p>
                  <p class="text-sm badge badge-default">Distributed Computing</p>
                </div>
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">SENG-616</p>
                  <p class="text-sm badge badge-default">Distributed Computing</p>
                </div>
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">SENG-616</p>
                  <p class="text-sm badge badge-default">Distributed Computing</p>
                </div>
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">SENG-616</p>
                  <p class="text-sm badge badge-default">Distributed Computing</p>
                </div>
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">SENG-616</p>
                  <p class="text-sm badge badge-default">Distributed Computing</p>
                </div>
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">SENG-616</p>
                  <p class="text-sm badge badge-default">Distributed Computing</p>
                </div>
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">SENG-616</p>
                  <p class="text-sm badge badge-default">Distributed Computing</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card">
        <div class="card-content">
          <div class="card-body bordered">
            <div class="">
              <div class="teacher-searchbar col-md-12">
                <p class="">Drag & Drop <strong>Class Rooms</strong> from here</p>
                <input type="text" placeholder="Search" class="form-control round">
                <a href="#" class="btn-default"><div class="form-control-position"><i class="ft-search"></i></div></a>
              </div>
              <div class="teacher-cards-container">
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">Room # 1</p>
                </div>
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">Computer Lab I</p>
                </div>
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">Electronics Lab I</p>
                </div>
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">Electronics Lab I</p>
                </div>
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">Electronics Lab I</p>
                </div>
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">Electronics Lab I</p>
                </div>
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">Electronics Lab I</p>
                </div>
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">Electronics Lab I</p>
                </div>
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">Electronics Lab I</p>
                </div>
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">Electronics Lab I</p>
                </div>
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">Electronics Lab I</p>
                </div>
                <div class="teacher-card draggable" draggable="true">
                  <p class="text-lg">Electronics Lab I</p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Basic Table Ends-->
<script src="<?=base_url('assets/js/timetable.js')?>" charset="utf-8"></script>
