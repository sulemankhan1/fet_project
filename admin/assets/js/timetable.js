const draggables = document.querySelectorAll('.draggable');
const droppables = document.querySelectorAll('.droppable');
test = true;
draggables.forEach(draggable => {

  draggable.addEventListener('dragstart', () => {
    draggable.classList.add('dragging');

    // if dragging start inside the table
    if($(draggable).parent().attr('data-start')) {
      // then remove the old values
      update_local_storage(draggable, 'remove');
    }

  })

  draggable.addEventListener('dragend', () => {
    draggable.classList.remove('dragging');
    let draggable_type = $(draggable).attr('data-dtype');
    // const copy = $(draggable).clone();
    // cloned_item = copy;

    // const teacher_name = draggable.querySelector('.teacher-name');

    // teacher_name.classList.add('draggable');
    // switch (draggable_type) {
    //   case 'teacher':
    //     $('#teachers_container').append(cloned_item[0]);
    //     break;
    //   case 'subject':
    //     $('#subjects_container').append(cloned_item[0]);
    //     break;
    //   case 'classroom':
    //     $('#classrooms_container').append(cloned_item[0]);
    //     break;
    // }
    test = true;
    // console.log(test);



    // add remove button on drop
    $(draggable).append('<span class="remover-btn" onclick="remove_item(this)"> <i class="fa fa-close"></i> </span>');

    update_local_storage(draggable, 'add');

    // location.reload();

  })
})

droppables.forEach(droppable => {
  droppable.addEventListener('dragover', e => {
    e.preventDefault();

    const afterElement = getDragAfterElement(droppable, e.clientY)
    const draggable = document.querySelector('.dragging');
    // var nodeCopy = document.getElementById(draggable).cloneNode(true);


    // if(test) {
      // var nodeCopy = $(draggable).clone();
      // nodeCopy.id = "newId";
    //   console.log(nodeCopy);
      // console.log(nodeCopy);
      if (afterElement == null) {
        droppable.appendChild(draggable)
        // $('#teachers_container').append(draggable);
      } else {
        droppable.insertBefore(draggable, afterElement)
      }
    //   test = false;
    // }

  })
})

function getDragAfterElement(droppable, y) {
  const draggableElements = [...droppable.querySelectorAll('.draggable:not(.dragging)')]

  return draggableElements.reduce((closest, child) => {
    const box = child.getBoundingClientRect()
    const offset = y - box.top - box.height / 2
    if (offset < 0 && offset > closest.offset) {
      return { offset: offset, element: child }
    } else {
      return closest
    }
  }, { offset: Number.NEGATIVE_INFINITY }).element
}

$(document).on('change','input[name=tt_type]',function() {
  let value = $(this).val();

  if(value == 'image') {
    $('.tt_image_cont').show();
    $('.btn_image').show();
    $('.btn_custom').hide();
  } else {
    $('.tt_image_cont').hide();
    $('.btn_image').hide();
    $('.btn_custom').show();
  }
})

// delete item
function remove_item(obj) {
  let item = $(obj).parent();
  // remove from local storage as well
  update_local_storage(item, 'remove');
  $(item).remove();
}


function update_local_storage(obj, type) {
  // getting timestart/end and day to save/remove ids in localstorage
  let day_elem = $(obj).parent().siblings()[0];
  let day = $(day_elem).attr('data-day');
  let start = $(obj).parent().attr('data-start');
  let end = $(obj).parent().attr('data-end');
  // get draggable item type (teacher/subject/classroom)
  let item_type = $(obj).attr('data-dtype');
  let item_value = $(obj).attr('data-dvalue');
  if(day || start || end) {

    // get local storage save and save ids
    let data = JSON.parse(window.localStorage.timetable_data);

    data.forEach((item, index) => {

      // find the right object
      if(item.time_from == start && item.time_to == end && item.day == day) {
        // REMOVE value
        if(item_type == 'teacher') {
          if(type == 'remove') {
            data[index].teacher_id  = 0;
          } else {
            data[index].teacher_id  = item_value;
          }
        }
        if(item_type == 'subject') {
          if(type == 'remove') {
            data[index].subject_id  = 0;
          } else {
            data[index].subject_id  = item_value;
          }
        }
        if(item_type == 'classroom') {
          if(type == 'remove') {
            data[index].classroom_id  = 0;
          } else {
            data[index].classroom_id  = item_value;
          }
        }
      }
    })
    window.localStorage.timetable_data = JSON.stringify(data);
    // SAVING DRAFT AND RELOADING PAGE BECAUSE OF AN ISSUE THAT THE TEACHERS/SUBJECTS/CLASSES
    // ARE NOT CLONNING SO WE ARE USING THIS SOLUTION FOR NOW BUT IT NEEDS
    // TO BE CHANGED LATER THE PAGE SHOULD NOT REFRESH EVERY TIME.
    save_timetable('draft', true);
  }
}
