// tsc main --target es6
// D'abord créer une fonction pour d'abord récupérer la valeur de l'input, ensuite créer les élements a ajouter dans l'HTML, le 'li' et le 'checkbox' et y ajouter les classes
var taskValue = document.querySelector('.js-task-input');
var taskButton = document.querySelector('.js-task-submit');
var taskDestination = document.querySelector('.js-task-list');
taskButton.addEventListener('click', function () {
    if (taskValue.value === "") {
        alert("Veuillez entrer une tâche");
    }
    else {
        var newTaskLi_1 = document.createElement('li');
        newTaskLi_1.classList.add('px-3', 'py-2', 'mb-2', 'bg-light', 'rounded', 'd-flex', 'justify-content-between', 'align-items-center', 'fw-medium', 'text-capitalize');
        var newTaskLiWrapper = document.createElement('div');
        newTaskLiWrapper.classList.add('d-flex', 'flex-row-reverse', 'gap-3');
        var newTaskCheckbox_1 = document.createElement('input');
        newTaskCheckbox_1.type = 'checkbox';
        newTaskCheckbox_1.classList.add('form-check-input', 'border-dark-subtle');
        var newTaskRemBtn = document.createElement('button');
        newTaskRemBtn.classList.add("btn", "btn-danger");
        taskDestination.appendChild(newTaskLi_1);
        newTaskLi_1.appendChild(newTaskLiWrapper);
        newTaskLiWrapper.innerHTML = taskValue.value;
        newTaskLiWrapper.appendChild(newTaskCheckbox_1);
        newTaskLi_1.appendChild(newTaskRemBtn);
        newTaskRemBtn.innerHTML = "Supprimer";
        taskValue.value = "";
        newTaskCheckbox_1.addEventListener('click', function () {
            if (newTaskCheckbox_1.checked) {
                newTaskLi_1.classList.remove("bg-light");
                newTaskLi_1.classList.add("bg-success", "text-light");
            }
            else {
                newTaskLi_1.classList.remove("bg-success", "text-light");
                newTaskLi_1.classList.add("bg-light");
            }
        });
        newTaskRemBtn.addEventListener('click', function () {
            newTaskLi_1.remove();
        });
    }
});
