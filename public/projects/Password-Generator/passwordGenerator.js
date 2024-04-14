// Générateur de mot de passe, avec 4 fonctionnalités :
// Choisir le nombre de caractères voulu
// Choisir si l'on souhaite des caractères spéciaux
// Choisir si l'on souhaite des majuscules
// Choisir si l'on souhaite des chiffres

// Reset bouton
const reset = () => {
    resetBtn.addEventListener('click', () => {

        majBtn.checked = false
        numBtn.checked = false
        speBtn.checked = false

        passwordLength.value = 8

        domGetter.deleteElement()
    })
}

// Variable password
let passwordContainer = 'abcdefghijklmnopqrstuvwxyz'
let password = ''

// Constantes des caractères à ajouter
const majChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
const numChars = '0123456789'
const speChars = '&é~"#{([-|è_\ç^à)]=°+¨$£%ù*µ!§:/;.,?@%`|<>'


// Constantes des boutons à récupérer
const resetBtn = document.querySelector('.js-reset')
const genBtn = document.querySelector('.js-gen')
const majBtn = document.querySelector('.js-maj')
const numBtn = document.querySelector('.js-num')
const speBtn = document.querySelector('.js-spe')
let passwordLength = document.querySelector('.js-length')
passwordLength.value = 8

const optionsChecker = () => {
    passwordContainer = 'abcdefghijklmnopqrstuvwxyz'

    if (majBtn.checked && !passwordContainer.includes(majChars)) {
        passwordContainer += majChars
    }
    if (numBtn.checked && !passwordContainer.includes(numChars)) {
        passwordContainer += numChars
    }
    if (speBtn.checked && !passwordContainer.includes(speChars)) {
        passwordContainer += speChars
    }
}

const passwordGenerator = () => {
    password = ''

    for (let i = 0; i < passwordLength.value; i++) {
        const random = Math.floor(Math.random() * passwordContainer.length)
        password += passwordContainer[random]
    }

    return password
}

const domGetter = {
    deleteElement: () => {
        const container = document.querySelector('.gen__container')
        const password = document.querySelector('.gen__password')

        container.remove()
        password.remove()
    }
}

const elementCreator = (e) => {
    const genContainer = document.createElement('div')
    genContainer.classList.add('gen__container')

    const genPassword = document.createElement('p')
    genPassword.classList.add('gen__password')
    genPassword.textContent = password

    if(e === true) {
        domGetter.deleteElement()
    }

    genContainer.appendChild(genPassword)
    document.body.appendChild(genContainer)
}

const startPasswordGenerator = () => {
    genBtn.addEventListener('click', () => {
        optionsChecker()

        passwordGenerator()
        console.log(passwordContainer) // TO DELETE

        if (document.querySelector('.gen__container') < 1 || document.querySelector('.gen__password') < 1) {
            elementCreator()
        } else {
            elementCreator(true)
        }
    })
}

startPasswordGenerator()

reset()