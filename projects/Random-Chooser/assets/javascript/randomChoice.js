// Random Choice
// Programme pour choisir aléatoirement entre plusieurs choix entrés par l'utilisateur
// Ajouter un choix en entrant le choix dans un input puis en appuyant sur un bouton
// Possibilité de supprimer un choix en appuyant sur un bouton dans le choix

// Récupération du bouton pour ajouter les choix
const addButton = document.querySelector('.js-add-button')

// Récupération de l'input de l'utilisateur
const addInput = document.querySelector('.js-input')

// Récupération du container pour y ajouter les choix
const choiceContainer = document.querySelector('.js-choice-container')

// Récupération du bouton pour lancer le choix
const choiceButton = document.querySelector('.js-button')

// Création d'un tableau pour récupérer chaque 'random__choice-button'
let buttonArray = []

const choiceGenerator = () => {
    addButton.addEventListener('click', () => {
        const userInput = addInput.value

        if (userInput.length >= 1) {
            choiceElementCreator(userInput)
            addInput.value = ''
        } else {
            alert('Veuillez saisir un choix.')
        }

        let choiceContainerChild = choiceContainer.childElementCount

        buttonArray.forEach((e) => {
            e.addEventListener('click', () => {
                e.parentElement.remove()
                choiceContainerChild = choiceContainer.childElementCount
                if (choiceContainerChild.value !== buttonArray.length) {
                    for (let i = 0; i < buttonArray.length; i++) {
                        if (!document.body.contains(buttonArray[i])) {
                            buttonArray.splice(i, 1)
                            i--
                        }
                    }
                }

                if (buttonArray.length === 0) {
                    choiceButton.classList.remove('flex')
                    choiceButton.classList.add('hidden')
                }
            })
        })

        if (choiceContainer.childElementCount > 0) {
            choiceButton.classList.remove('hidden')
            choiceButton.classList.add('flex')
        }
    })

    choiceGeneratorRequirement()
}

const choiceElementCreator = (value) => {

    // Création d'une div : random__choice
    const choice = document.createElement('div')
    choice.classList.add('random__choice','mb-12', 'px-9', 'py-4', 'border', 'border-gray-300', 'rounded-lg', 'bg-gray-50', 'focus:ring-blue-500', 'focus:border-blue-500', 'dark:bg-gray-700', 'dark:border-gray-600', 'dark:placeholder-gray-400', 'dark:text-white', 'dark:focus:ring-blue-500', 'dark:focus:border-blue-500')

    // Création d'un p : random__choice-p
    const choiceP = document.createElement('p')
    choiceP.classList.add('random__choice-p')
    choiceP.textContent = value

    // Création d'un bouton : random__choice-button
    const choiceButton = document.createElement('button')
    choiceButton.classList.add('random__choice-button')

    // Ajout des boutons dans un tableau
    buttonArray.push(choiceButton)

    // Création d'une image
    const choiceImg = document.createElement('img')
    choiceImg.src = './assets/images/delete-back-line.svg'

    // Ajout de l'image dans le bouton
    choiceButton.appendChild(choiceImg)

    // Ajout du bouton et du p dans la div
    choice.appendChild(choiceP)
    choice.appendChild(choiceButton)

    // Ajout de la div au DOM
    choiceContainer.appendChild(choice)
}

const choiceWinner = (winner) => {
    winner.parentElement.classList.remove('bg-gray-50', 'dark:bg-gray-700', 'dark:border-gray-600', 'border-gray-300')
    winner.parentElement.classList.add('winner', 'bg-emerald-400', 'border-green-500')
}

const choiceGeneratorRequirement = () => {
    choiceButton.addEventListener('click', () => {
        if (choiceContainer.childElementCount > 1) {
            // Initialisation de la variable 'alreadyWon' à 0
            let alreadyWon = 0

            // Récupération de tous les participants
            const choiceParticipant = document.querySelectorAll('.random__choice')

            // Générer un index aléatoire depuis le tableau 'buttonArray'
            const randomIndex = Math.floor(Math.random() * buttonArray.length)

            // Accéder à l'élément correspondant à 'randomIndex'
            const randomElement = buttonArray[randomIndex]

            // Vérification que les participants n'ont pas déjà la classe winner
            choiceParticipant.forEach((e) => {
                if (e.classList.contains('winner')) {
                    alreadyWon = 1 // Si un participant a la classe winner 'alreadyWon' est redéfinis sur : 1
                }
            })

            // Si 'alreadyWon' vaut 0 alors on lance la fonction choiceWinner
            if (alreadyWon === 0) {
                choiceWinner(randomElement)
                console.log('1', alreadyWon)
            } else { // Si 'alreadyWon' vaut 1 alors on récupère l'élément avec la classe winner
                const winner = document.querySelector('.winner')
                winner.classList.add('bg-gray-50', 'dark:bg-gray-700', 'dark:border-gray-600', 'border-gray-300')
                winner.classList.remove('winner', 'bg-emerald-400', 'border-green-500')
                alreadyWon = 0
            }
        }
    })
}

choiceGenerator()