const gameBoard = document.querySelector('.game-board')

const cards = [
  'https://api.dicebear.com/7.x/fun-emoji/svg?seed=Bob',
  'https://api.dicebear.com/7.x/fun-emoji/svg?seed=Boo',
  'https://api.dicebear.com/7.x/fun-emoji/svg?seed=Callie',
  'https://api.dicebear.com/7.x/fun-emoji/svg?seed=Sheba',
  'https://api.dicebear.com/7.x/fun-emoji/svg?seed=Sophie',
  'https://api.dicebear.com/7.x/fun-emoji/svg?seed=Chloe',
  'https://api.dicebear.com/7.x/fun-emoji/svg?seed=Angel',
  'https://api.dicebear.com/7.x/fun-emoji/svg?seed=Lina',
]

let selectedCards = []

function createCard (cardUrl) {
  const card = document.createElement('div')
  card.classList.add('card')
  card.dataset.value = cardUrl

  const cardContent = document.createElement('img')
  cardContent.classList.add('card-content')
  cardContent.src = `${cardUrl}`

  card.appendChild(cardContent)
  card.addEventListener('click', (onCardClick))
  return card
}

function duplicateArray(arraySimple) {
  let arrayDouble = []
  arrayDouble.push(...arraySimple)
  arrayDouble.push(...arraySimple)
  return arrayDouble
}

function shuffleArray(arrayToShuffle) {
  const arrayShuffled = arrayToShuffle.sort(() => Math.random() - 0.5)
  return arrayShuffled
}

function onCardClick (event) {
  const card = event.target.parentElement
  card.classList.add('flip')

  selectedCards.push(card)
  if(selectedCards.length === 2) {
    setTimeout(() => {
      if(selectedCards[0].dataset.value === selectedCards[1].dataset.value && selectedCards[0] !== selectedCards[1]){
        selectedCards[0].classList.add('matched')
        selectedCards[1].classList.add('matched')
        selectedCards[0].removeEventListener('click', onCardClick)
        selectedCards[1].removeEventListener('click', onCardClick)

        const allCardNotFinded = document.querySelectorAll('.card:not(.matched)');
        if(allCardNotFinded.length == 0){
          //Le joueur a gagné
          alert('Bravo, vous avez gagné');
        }
      }
      else {
        selectedCards[0].classList.remove('flip')
        selectedCards[1].classList.remove('flip')
      }
      selectedCards = []
    },1000)
  }
}

let allCards = duplicateArray(cards)
allCards = shuffleArray(allCards)

allCards.forEach(card => {
  const cardHtml = createCard(card)
  gameBoard.appendChild(cardHtml)
})