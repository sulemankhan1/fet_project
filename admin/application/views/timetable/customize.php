<link rel="stylesheet" href="<?=base_url('assets/css/timetable.css')?>">
<?php
if($this->session->flashdata('data') && !isset($record)) {
  // convert array into object and store in record variable to show data on form
  $record = json_decode(json_encode($this->session->flashdata('data')));
}
 ?>
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

<script src="<?=base_url('assets/js/timetable.js')?>" charset="utf-8"></script>
