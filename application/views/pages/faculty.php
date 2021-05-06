<!-- Start main-content -->
<div class="main-content">

  <!-- Section: inner-header -->
  <section class="inner-header divider parallax layer-overlay overlay-white-8 teachers-top-sec" data-bg-img="<?=base_url('assets/images/bg/bg8.jpg')?>">
    <div class="container pt-30 pb-30">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="mt-0 line-height-1">Faculty <span class="text-theme-colored3">Members</span></h2>
            <ol class="breadcrumb text-center mt-10">
              <p>The mediocre teacher tells. The good teacher explains. The superior teacher demonstrates. The great teacher inspires.</p>
              <p>William Arthur Ward</p>
              <li><a href="index.php">Home</a></li>
              <li class="active text-theme-colored">FET Faculty</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section:  -->
  <section>
    <div class="container pb-sm-70">
      <div class="text-center col-md-12 teachers-search-from mb-80">
        <form class="form-inline">
          <input type="text" name="search_teacher" placeholder="Search Teacher" class="form-control ts-input faculty_search">
          <div class="selects-holder">
            <select class="form-control select-by-campus" name="" placeholder="By Campus">
              <option selected disabled value=""> by Campus </option>
              
              <option value="all">in all Campus</option>
              
              <?php foreach($campus as $key => $v):?>

              <option value="<?=$v->id?>"><?=$v->name?></option>

              <?php endforeach ?>

            </select>
            <select class="form-control select-by-faculty" name="" placeholder="By Faculty">
              <option selected disabled value=""> by Faculty </option>
              <option value="all">in all Faculties</option>
            </select>
            <select class="form-control select-by-department" name="" placeholder="By Program">
              <option selected disabled value=""> by Department </option>
              <option value="all">in all Programs</option>
            </select>
          </div>
          <a href="javascript:void(0)" class="search_faculty"><i class="fa fa-search search-icon"></i></a>
        </form>
      </div>
      <div class="section-content text-center">
       
        <div class="row mb-30 " id="all_faculty_members">
          
          
        </div>

        <div class="row mb-30">
          
          <div class="col-sm-12" id="faculty_pagination">
          </div>
          
        </div>

      </div>
    </div>
  </section>

</div>
<!-- end main-content -->
<script type="text/javascript">

	let search = '';  let campus = ''; let faculty = ''; let depart = '';
		  	
    $('.select-by-campus,.select-by-faculty,.select-by-department').change(function(){


        if($(this).hasClass('select-by-campus'))
        {

          $.ajax({
              
              url : '<?=site_url('pages/getAllFaculties/')?>'+$(this).val(),
              success:function(data)
              {
                  $('.select-by-faculty').html(data)
                  $('.select-by-department').html('<option selected disabled value=""> by Department </option><option value="all">in all Departments</option>')
              }

            })

        }
        else if($(this).hasClass('select-by-faculty'))
        {

            $.ajax({

              url : '<?=site_url('pages/getAllDepartments/')?>'+$(this).val(),
              success:function(data)
              {
                  $('.select-by-department').html(data)
              }

            })


        }


        search = $('.faculty_search').val();
        campus = $('.select-by-campus option:selected').val();
        faculty = $('.select-by-faculty option:selected').val();
        depart = $('.select-by-department option:selected').val();

        getAllFacultyMembers(1,search,campus,faculty,depart);

    })

    // Detect pagination click
    $('#faculty_pagination').on('click','a',function(e){
        e.preventDefault(); 
        let pageno = $(this).attr('data-ci-pagination-page');

        search = $('.faculty_search').val();
        campus = $('.select-by-campus option:selected').val();
        faculty = $('.select-by-faculty option:selected').val();
        depart = $('.select-by-department option:selected').val();

        getAllFacultyMembers(pageno,search,campus,faculty,depart);

    });


    $('.search_faculty').click(function () {

      search = $('.faculty_search').val();
      campus = $('.select-by-campus option:selected').val();
      faculty = $('.select-by-faculty option:selected').val();
      depart = $('.select-by-department option:selected').val();
      
      getAllFacultyMembers(1,search,campus,faculty,depart);

    })

  
    getAllFacultyMembers(1,search,campus,faculty,depart);

	//fetch_faculty_members
  function getAllFacultyMembers(pageno,search='',campus='',faculty='',depart='')
  {  

      $.ajax({
          url:'<?= site_url('pages/getAllFacultyMembers/')?>'+pageno,
          data:{
            search : search,
            campus:campus,
            faculty:faculty,
            depart:depart
            },
          method: 'post',
          dataType: 'json',
          success: function(response)
          {
            
            console.log(response);

            $('#all_faculty_members').html(response.result);
            $('#faculty_pagination').html(response.pagination);

          }
          
      });
    
  }

</script>