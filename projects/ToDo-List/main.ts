// tsc main --target es6
// D'abord créer une fonction pour d'abord récupérer la valeur de l'input, ensuite créer les élements a ajouter dans l'HTML, le 'li' et le 'checkbox' et y ajouter les classes

const taskValue = document.querySelector('.js-task-input') as HTMLInputElement
const taskButton = document.querySelector('.js-task-submit') as HTMLButtonElement
const taskDestination = document.querySelector('.js-task-list') as HTMLUListElement

taskButton.addEventListener('click', () => {

  if (taskValue.value === "") {
    alert("Veuillez entrer une tâche")
  } 
  else {
    const newTaskLi: HTMLLIElement = document.createElement('li')
    newTaskLi.classList.add('px-3', 'py-2', 'mb-2', 'bg-light', 'rounded', 'd-flex', 'justify-content-between', 'align-items-center', 'fw-medium', 'text-capitalize')
    const newTaskLiWrapper: HTMLDivElement = document.createElement('div')
    newTaskLiWrapper.classList.add('d-flex', 'flex-row-reverse', 'gap-3')
    const newTaskCheckbox: HTMLInputElement = document.createElement('input')
    newTaskCheckbox.type = 'checkbox'
    newTaskCheckbox.classList.add('form-check-input', 'border-dark-subtle')
    const newTaskRemBtn: HTMLButtonElement = document.createElement('button')
    newTaskRemBtn.classList.add("btn", "btn-danger")

    taskDestination.appendChild(newTaskLi)
    newTaskLi.appendChild(newTaskLiWrapper)
    newTaskLiWrapper.innerHTML = taskValue.value
    newTaskLiWrapper.appendChild(newTaskCheckbox)
    newTaskLi.appendChild(newTaskRemBtn)
    newTaskRemBtn.innerHTML = "Supprimer"
    taskValue.value = ""

    newTaskCheckbox.addEventListener('click', () => {
      if(newTaskCheckbox.checked) {
        newTaskLi.classList.remove("bg-light")
        newTaskLi.classList.add("bg-success", "text-light")
      } else {
        newTaskLi.classList.remove("bg-success", "text-light")
        newTaskLi.classList.add("bg-light")
      }
    })

    newTaskRemBtn.addEventListener('click', () => {
      newTaskLi.remove()
    })
  }
})