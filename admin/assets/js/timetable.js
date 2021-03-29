const draggables = document.querySelectorAll('.draggable');
const droppables = document.querySelectorAll('.droppable');

draggables.forEach(draggable => {
  draggable.addEventListener('dragstart', () => {
    draggable.classList.add('dragging');
  })

  draggable.addEventListener('dragend', () => {
    draggable.classList.remove('dragging');
  })
})

droppables.forEach(droppable => {
  droppable.addEventListener('dragover', e => {
    e.preventDefault();
    const afterElement = getDragAfterElement(droppable, e.clientY)
    const draggable = document.querySelector('.dragging');
    const teacher_name = draggable.querySelector('.teacher-name');
    // teacher_name.classList.add('draggable');
    if (afterElement == null) {
      droppable.appendChild(draggable)
    } else {
      droppable.insertBefore(draggable, afterElement)
    }
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
