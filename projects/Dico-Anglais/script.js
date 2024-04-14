console.log('V1 : Mon dico')

/*

MON PROGRAMME : 

> Je veux pouvoir donner la définition d'un mot à mes utilisateurs

- Récupérer le mot saisi par l'utilisateur
- Envoyer le mot à l'API ( https://dictionaryapi.dev/ )
- Récupérer la définition du mot
- Afficher la définition du mot
- Ajouter un lecteur pour écouter la prononciation du mot

*/

// 1. Récupérer mon mot
const watchSubmit = () => {
    const form = document.querySelector("#form")
    form.addEventListener("submit", (event) => {
        event.preventDefault()
        const data = new FormData(form)
        const wordToSearch = data.get("search")
        apiCall(wordToSearch)
    })
}

// 2. Envoyer mon mot a l'API
const apiCall = (word) => {
    fetch(`https://api.dictionaryapi.dev/api/v2/entries/en/${word}`)
        .then((response) => response.json())
        .then((data) => {
            // 3. Récupérer la donnée
            const informationsNeeded = extractData(data[0])
            renderToHTML(informationsNeeded)
        })
        .catch((error) => {
            alert('Le mot demandé n\'existe pas')
            console.error(error)
        })
}

const extractData = (data) => {
    // 1 - Mot
    const word = data.word
    // 2 - Ecriture phonétique
    const phonetic = findProp(data.phonetics, "text")
    // - 3 Prononciation
    const pronoun = findProp(data.phonetics, "audio")
    // 4 - Définition
    const meanings = data.meanings

    return {
        word: word,
        phonetic: phonetic,
        pronoun: pronoun,
        meanings: meanings
    }
}

const findProp = (array, name) => {
    for (let i = 0; i < array.length; i++) {
        const currentObject = array[i]
        const hasProp = currentObject.hasOwnProperty(name)
        if (hasProp) return currentObject[name]
    }
}

// Afficher les infos du mot sur la page
const renderToHTML = (data) => {
    const card = document.querySelector('.js-card')
    card.classList.remove('card--hidden')
    // Manipulation de textes avec la propriété textContent
    const title = document.querySelector(".js-card-title")
    title.textContent = data.word
    const phonetic = document.querySelector(".js-card-phonetic")
    phonetic.textContent = data.phonetic

    // Création d'élément HTML dynamiques{
    const list = document.querySelector(".js-card-list")
    list.innerHTML = ""
    for (let i = 0; i < data.meanings.length; i++) {
        const meaning = data.meanings[i]
        const partOfSpeech = meaning.partOfSpeech
        const definition = meaning.definitions[0].definition
        // 1- Avec un innerHTML
        // list.innerHTML += `
        // <li class="card__meaning">
        //     <p class="card__part-of-speech">${partOfSpeech}</p>
        //     <p class="card__definition">${definition}</p>
        // </li>`

        // 2- Avec la création d'élément
        const li = document.createElement('li')
        li.classList.add("card__meaning")
        const pPartOfSpeech = document.createElement('p')
        pPartOfSpeech.textContent = partOfSpeech
        pPartOfSpeech.classList.add('card__part-of-speech')
        const pDefinition = document.createElement('p')
        pDefinition.textContent = definition
        pDefinition.classList.add('card__definition')

        li.appendChild(pPartOfSpeech)
        li.appendChild(pDefinition)
        list.appendChild(li)
    }

    // Ajout d'audio en JS
    const button = document.querySelector('.js-card-button')
    const audio = new Audio(data.pronoun)
    button.addEventListener('click', () => {
        button.classList.remove('card__player--off')
        button.classList.add('card__player--on')
        audio.play()
          console.log(audio.play())
    })
    audio.addEventListener('ended', () => {
        button.classList.remove('card__player--on')
        button.classList.add('card__player--off')
    })
}


// Lancement du programme
watchSubmit()