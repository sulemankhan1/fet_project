<link rel="stylesheet" href="<?=base_url('assets/css/timetable.css')?>">
<?php
if($this->session->flashdata('data') && !isset($record)) {
  // convert array into object and store in record variable to show data on form
  $record = json_decode(json_encode($this->session->flashdata('data')));
}
 ?>
 <style media="screen">
  .t1 {
    display: inline-block;
    /* width: 40%; */
    font-weight: bold;
  }
 </style>
 <div class="row ">
   <div class="col-md-12 mb-3">
     <div class="card mb-0">
       <div class="card-content ">
         <div class="card-body">
           <div class="row padded">
             <div class="col-md-4">
               <p><span class="t1">Campus: </span> <?=$record->campus_name?> </p>
               <p><span class="t1">Semester: </span> <?=$record->semester?></p>
               <p><span class="t1">Year: </span> <?=$record->year?></p>
             </div>
             <div class="col-md-4">
               <p><span class="t1">Faculty: </span> <?=$record->faculty_name?></p>
               <p><span class="t1">Part: </span> <?=$record->part?></p>
               <p><span class="t1">Group: </span> <?=$record->class_group?></p>
             </div>
             <div class="col-md-4">
               <p><span class="t1">Department: </span> <?=$record->depart_name?></p>
               <p><span class="t1">For: </span> <?=$record->evening_morning?></p>
               <p><span class="t1">Timetable Type: </span> <?=$record->type?></p>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

   <div class="col-sm-12">
     <div class="alert alert-secondary">
       <i class="fa fa-info-circle"></i> <strong>Drag and drop from bottom</strong> If two classes are taken by the same Teacher then keep the same values in both left and right cell. The System will automatically merge those cells when showing or sending Timetable.
     </div>
     <div class="card mb-0">
       <div class="card-content ">
         <div class="card-body">
           <div class="">
             <table class="table table-hovered table-stripped table-bordered tt_timetable">
               <input type="hidden" name="tt_evening_morning" id="tt_evening_morning" value="<?=$record->evening_morning?>">
               <tr>
                 <td></td>
                 <?php
                 if($record->evening_morning == 'morning') {
                   $start_time = $morning_start_time; // day start time
                   $end_time = $morning_end_time; // day end time
                 } else {
                   $start_time = $evening_start_time; // day start time
                   $end_time = $evening_end_time; // day end time
                 }
                 while(date('H', strtotime($start_time)) < date('H', strtotime($end_time))) {
                   // current class end time
                   $class_end_time = date('h:i a', strtotime($start_time." +$class_duration minutes"));
                  ?>
                 <td><?=$start_time." - ".((date('H:i', strtotime($class_end_time)) > (date('H:i', strtotime($end_time))))?$end_time:$class_end_time)?></td>
               <?php
               $start_time = $class_end_time;
             } ?>
               </tr>

               <tr>
                 <th class="day" data-day="monday">Monday</th>
                 <?php

                 if($record->evening_morning == 'morning') {
                   $start_time = $morning_start_time; // day start time
                   $end_time = $morning_end_time; // day end time
                 } else {
                   $start_time = $evening_start_time; // day start time
                   $end_time = $evening_end_time; // day end time
                 }

                 while(date('H', strtotime($start_time)) < date('H', strtotime($end_time))) {
                   // current class end time
                   $class_end_time = date('h:i a', strtotime($start_time." +$class_duration minutes"));
                  ?>
                  <td class="addable droppable" data-start="<?=$start_time?>" data-end="<?=((date('H:i', strtotime($class_end_time)) > (date('H:i', strtotime($end_time))))?$end_time:$class_end_time)?>"></td>
                <?php $start_time = $class_end_time;
                 } ?>
               </tr>
               <tr>
                 <th class="day" data-day="tuesday">Tuesday</th>
                 <?php

                 if($record->evening_morning == 'morning') {
                   $start_time = $morning_start_time; // day start time
                   $end_time = $morning_end_time; // day end time
                 } else {
                   $start_time = $evening_start_time; // day start time
                   $end_time = $evening_end_time; // day end time
                 }

                 while(date('H', strtotime($start_time)) < date('H', strtotime($end_time))) {
                   // current class end time
                   $class_end_time = date('h:i a', strtotime($start_time." +$class_duration minutes"));
                  ?>
                  <td class="addable droppable" data-start="<?=$start_time?>" data-end="<?=((date('H:i', strtotime($class_end_time)) > (date('H:i', strtotime($end_time))))?$end_time:$class_end_time)?>"></td>
                <?php $start_time = $class_end_time;
                 } ?>
               </tr>
               <tr>
                 <th class="day" data-day="wednesday">Wednesday</th>
                 <?php

                 if($record->evening_morning == 'morning') {
                   $start_time = $morning_start_time; // day start time
                   $end_time = $morning_end_time; // day end time
                 } else {
                   $start_time = $evening_start_time; // day start time
                   $end_time = $evening_end_time; // day end time
                 }

                 while(date('H', strtotime($start_time)) < date('H', strtotime($end_time))) {
                   // current class end time
                   $class_end_time = date('h:i a', strtotime($start_time." +$class_duration minutes"));
                  ?>
                  <td class="addable droppable" data-start="<?=$start_time?>" data-end="<?=((date('H:i', strtotime($class_end_time)) > (date('H:i', strtotime($end_time))))?$end_time:$class_end_time)?>"></td>
                <?php $start_time = $class_end_time;
                 } ?>
               </tr>
               <tr>
                 <th class="day" data-day="thursday">Thursday</th>
                 <?php

                 if($record->evening_morning == 'morning') {
                   $start_time = $morning_start_time; // day start time
                   $end_time = $morning_end_time; // day end time
                 } else {
                   $start_time = $evening_start_time; // day start time
                   $end_time = $evening_end_time; // day end time
                 }

                 while(date('H', strtotime($start_time)) < date('H', strtotime($end_time))) {
                   // current class end time
                   $class_end_time = date('h:i a', strtotime($start_time." +$class_duration minutes"));
                  ?>
                  <td class="addable droppable" data-start="<?=$start_time?>" data-end="<?=((date('H:i', strtotime($class_end_time)) > (date('H:i', strtotime($end_time))))?$end_time:$class_end_time)?>"></td>
                <?php $start_time = $class_end_time;
                 } ?>
               </tr>
               <tr>
                 <th class="day" data-day="friday">Friday</th>
                 <?php

                 if($record->evening_morning == 'morning') {
                   $start_time = $morning_start_time; // day start time
                   $end_time = $morning_end_time; // day end time
                 } else {
                   $start_time = $evening_start_time; // day start time
                   $end_time = $evening_end_time; // day end time
                 }

                 while(date('H', strtotime($start_time)) < date('H', strtotime($end_time))) {
                   // current class end time
                   $class_end_time = date('h:i a', strtotime($start_time." +$class_duration minutes"));
                  ?>
                  <td class="addable droppable" data-start="<?=$start_time?>" data-end="<?=((date('H:i', strtotime($class_end_time)) > (date('H:i', strtotime($end_time))))?$end_time:$class_end_time)?>"></td>
                <?php $start_time = $class_end_time;
                 } ?>
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
               <!-- <div class="teacher-card draggable" draggable="true" >
                 <div class="tc-left">
                   <img src="<?=base_url('app-assets/img/portrait/small/avatar-s-3.png')?>" class="rounded-circle width-50 mr-2">
                 </div>
                 <div class="tc-right">
                   <p class="text-lg teacher-name">Sir Kamran Taj</p>
                   <p class="text-sm badge badge-primary">Professor</p>
                 </div>
               </div> -->
               <?php
               if(!empty($teachers)) {
               foreach($teachers as $teacher) { ?>
                 <div class="teacher-card draggable" draggable="true" data-dtype="teacher" data-dvalue="<?=$teacher->id?>">
                   <p class="text-lg teacher-name"><?=$teacher->title." ".$teacher->full_name?></p>
                 </div>
               <?php }
              } else { ?>
                <p class="text-lg">No Teachers Found</p>
               <?php } ?>
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
               <?php
               if(!empty($subjects)) {
               foreach($subjects as $subject) { ?>
                 <div class="teacher-card draggable" draggable="true" data-dtype="subject" data-dvalue="<?=$subject->id?>">
                   <p class="text-lg"><?=$subject->course_code?></p>
                   <p class="text-sm badge badge-default"><?=$subject->subject_title?></p>
                 </div>
               <?php }
              } else { ?>
                <p class="text-lg">No Subjects Found</p>
               <?php } ?>
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
               <?php
               if(!empty($class_rooms)) {
               foreach($class_rooms as $class_room) { ?>
                 <div class="teacher-card draggable" draggable="true" data-dtype="classroom" data-dvalue="<?=$class_room->id?>">
                   <p class="text-lg"><?=$class_room->name?></p>
                 </div>
               <?php }
              } else { ?>
                <p class="text-lg">No Class Rooms Found</p>
               <?php } ?>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>

<script src="<?=base_url('assets/js/timetable.js')?>" charset="utf-8"></script>
<script>
  $('document').ready(function() {
    initiateLocalStorage();
  })
  function initiateLocalStorage() {

    window.localStorage.timetable_data = "";
    let evening_morning = $('#tt_evening_morning').val();
    $.ajax({
      url: "<?=site_url('timetable/getTimetSettings')?>/"+evening_morning,
      type: 'GET',
      success: function(resp) {
        // save in json format
        window.localStorage.timetable_data = resp;
      }
    })
    // console.log(JSON.parse(window.localStorage.timetable_data));
  }
</script>
