<link rel="stylesheet" href="<?=base_url('admin/assets/css/timetable.css')?>">
<style>
  .teacher-card {
    cursor: auto;
  }
  .tt_timetable {
    color: #111 !important;
  }
  .tt_timetable td, .tt_timetable th {
    border-color: #ccc !important;
  }
</style>
<table class="table table-hovered table-stripped table-bordered tt_timetable" id="myTable">
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
     <td class="addable">
       <?php if(!empty($detail_records)) {
          foreach($detail_records as $drow) {
              if($drow->time_from == $start_time &&
              $drow->day == "monday" &&
              $drow->time_to == ((date('H:i', strtotime($class_end_time)) > (date('H:i', strtotime($end_time))))?$end_time:$class_end_time)
             ) {
                if($drow->teacher_id != "" && $drow->teacher_id != 0) {
                  // teacher
                  ?>
                  <div class="teacher-card" >
                    <p class="text-lg teacher-name"><?=$drow->user_title." ".$drow->user_fullname?></p>
                  </div>
                  <?php
                }
                if($drow->subject_id != "" && $drow->subject_id != 0) {
                  // subject
                  ?>

                  <div class="teacher-card" data-dtype="subject" data-dvalue="<?=$drow->subject_id?>">
                    <p class="text-lg"><?=$drow->course_code?></p>
                    <p class="text-sm"><?=$drow->subject_title?></p>
                  </div>
                  <?php
                }
                if($drow->classroom_id != "" && $drow->classroom_id != 0) {
                  // classroom
                  ?>
                  <div class="teacher-card" data-dtype="classroom" data-dvalue="<?=$drow->classroom_id?>">
                    <p class="text-lg"><?=$drow->class_name?></p>
                  </div>
                  <?php
                }
              }
          }
       } ?>
     </td>
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
     <td class="addable">
       <?php if(!empty($detail_records)) {
          foreach($detail_records as $drow) {
              if($drow->time_from == $start_time &&
              $drow->day == "tuesday" &&

              $drow->time_to == ((date('H:i', strtotime($class_end_time)) > (date('H:i', strtotime($end_time))))?$end_time:$class_end_time)) {
                if($drow->teacher_id != "" && $drow->teacher_id != 0) {
                  // teacher
                  ?>
                  <div class="teacher-card" >
                    <p class="text-lg teacher-name"><?=$drow->user_title." ".$drow->user_fullname?></p>
                  </div>
                  <?php
                }
                if($drow->subject_id != "" && $drow->subject_id != 0) {
                  // subject
                  ?>

                  <div class="teacher-card" data-dtype="subject" data-dvalue="<?=$drow->subject_id?>">
                    <p class="text-lg"><?=$drow->course_code?></p>
                    <p class="text-sm"><?=$drow->subject_title?></p>
                  </div>
                  <?php
                }
                if($drow->classroom_id != "" && $drow->classroom_id != 0) {
                  // classroom
                  ?>
                  <div class="teacher-card" data-dtype="classroom" data-dvalue="<?=$drow->classroom_id?>">
                    <p class="text-lg"><?=$drow->class_name?></p>
                  </div>
                  <?php
                }
              }
          }
       } ?>
     </td>
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
     <td class="addable">
       <?php if(!empty($detail_records)) {
          foreach($detail_records as $drow) {
              if($drow->time_from == $start_time &&
              $drow->day == "wednesday" &&
              $drow->time_to == ((date('H:i', strtotime($class_end_time)) > (date('H:i', strtotime($end_time))))?$end_time:$class_end_time)) {
                if($drow->teacher_id != "" && $drow->teacher_id != 0) {
                  // teacher
                  ?>
                  <div class="teacher-card" >
                    <p class="text-lg teacher-name"><?=$drow->user_title." ".$drow->user_fullname?></p>
                  </div>
                  <?php
                }
                if($drow->subject_id != "" && $drow->subject_id != 0) {
                  // subject
                  ?>

                  <div class="teacher-card" data-dtype="subject" data-dvalue="<?=$drow->subject_id?>">
                    <p class="text-lg"><?=$drow->course_code?></p>
                    <p class="text-sm"><?=$drow->subject_title?></p>
                  </div>
                  <?php
                }
                if($drow->classroom_id != "" && $drow->classroom_id != 0) {
                  // classroom
                  ?>
                  <div class="teacher-card" data-dtype="classroom" data-dvalue="<?=$drow->classroom_id?>">
                    <p class="text-lg"><?=$drow->class_name?></p>
                  </div>
                  <?php
                }
              }
          }
       } ?>
     </td>
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
     <td class="addable">
       <?php if(!empty($detail_records)) {
          foreach($detail_records as $drow) {
              if($drow->time_from == $start_time &&
              $drow->day == "thursday" &&
              $drow->time_to == ((date('H:i', strtotime($class_end_time)) > (date('H:i', strtotime($end_time))))?$end_time:$class_end_time)) {
                if($drow->teacher_id != "" && $drow->teacher_id != 0) {
                  // teacher
                  ?>
                  <div class="teacher-card" >
                    <p class="text-lg teacher-name"><?=$drow->user_title." ".$drow->user_fullname?></p>
                  </div>
                  <?php
                }
                if($drow->subject_id != "" && $drow->subject_id != 0) {
                  // subject
                  ?>

                  <div class="teacher-card" data-dtype="subject" data-dvalue="<?=$drow->subject_id?>">
                    <p class="text-lg"><?=$drow->course_code?></p>
                    <p class="text-sm"><?=$drow->subject_title?></p>
                  </div>
                  <?php
                }
                if($drow->classroom_id != "" && $drow->classroom_id != 0) {
                  // classroom
                  ?>
                  <div class="teacher-card" data-dtype="classroom" data-dvalue="<?=$drow->classroom_id?>">
                    <p class="text-lg"><?=$drow->class_name?></p>
                  </div>
                  <?php
                }
              }
          }
       } ?>
     </td>
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
     <td class="addable">
       <?php if(!empty($detail_records)) {
          foreach($detail_records as $drow) {
              if($drow->time_from == $start_time &&
              $drow->day == "friday" &&
              $drow->time_to == ((date('H:i', strtotime($class_end_time)) > (date('H:i', strtotime($end_time))))?$end_time:$class_end_time)) {
                if($drow->teacher_id != "" && $drow->teacher_id != 0) {
                  // teacher
                  ?>
                  <div class="teacher-card" >
                    <p class="text-lg teacher-name"><?=$drow->user_title." ".$drow->user_fullname?></p>
                  </div>
                  <?php
                }
                if($drow->subject_id != "" && $drow->subject_id != 0) {
                  // subject
                  ?>

                  <div class="teacher-card" data-dtype="subject" data-dvalue="<?=$drow->subject_id?>">
                    <p class="text-lg"><?=$drow->course_code?></p>
                    <p class="text-sm"><?=$drow->subject_title?></p>
                  </div>
                  <?php
                }
                if($drow->classroom_id != "" && $drow->classroom_id != 0) {
                  // classroom
                  ?>
                  <div class="teacher-card" data-dtype="classroom" data-dvalue="<?=$drow->classroom_id?>">
                    <p class="text-lg"><?=$drow->class_name?></p>
                  </div>
                  <?php
                }
              }
          }
       } ?>
     </td>
   <?php $start_time = $class_end_time;
    } ?>
  </tr>
</table>
