// D'abord créer une fonction pour d'abord récupérer la valeur de l'input, ensuite créer les élements a ajouter dans l'HTML, le 'li' et le 'checkbox' et y ajouter les classes

const task = document.querySelector('.js-task-input')
const taskSubmit = document.querySelector('.js-task-submit')
const taskList = document.querySelector('.js-task-list')

taskSubmit.addEventListener('click', () => {
  const newTask = task.value
  const newTaskLi = document.createElement("li")
  newTaskLi.classList.add('px-3', 'py-2', 'mb-2', 'bg-light', 'rounded', 'd-flex', 'flex-row-reverse', 'justify-content-end', 'gap-3', 'fw-medium', 'text-capitalize')
  const newTaskCheckbox = document.createElement("input")
  newTaskCheckbox.type = "checkbox"
  newTaskCheckbox.classList.add('form-check-input', 'border-dark-subtle')

  newTaskLi.innerHTML = newTask
  taskList.appendChild(newTaskLi)
  newTaskLi.appendChild(newTaskCheckbox)
  task.value = ""

  newTaskCheckbox.addEventListener("click", () => {
    if(newTaskCheckbox.checked) {
      newTaskLi.classList.remove("bg-light")
      newTaskLi.classList.add("bg-success", "text-light")
    } else {
      newTaskLi.classList.remove("bg-success", "text-light")
      newTaskLi.classList.add("bg-light")
    }
  })
})