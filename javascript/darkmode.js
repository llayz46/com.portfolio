const switcherDay = document.querySelector('.js-light')
const switcherNight = document.querySelector('.js-dark')

const main = document.querySelectorAll('.js-main')
const modeSelect = document.querySelector('.js-mode-select')
const title = document.querySelectorAll('.js-title')
const content = document.querySelectorAll('.js-content')
const cards = document.querySelectorAll('.js-cards')
const cardText = document.querySelectorAll('.js-cards-text')
const cardBtn = document.querySelectorAll('.js-cards-btn')
const formBg = document.querySelectorAll('.js-form')
const formBorder = document.querySelectorAll('.js-form-border')

switcherNight.addEventListener('click', () => {
  switcherDay.classList.remove('active')
  switcherNight.classList.add('active-night')

  document.body.classList.add('js-body-dark-mode')
  modeSelect.style.backgroundColor = "#040817"

  main.forEach(function(each) {
    each.style.backgroundColor = "#040817"
  })

  title.forEach(function(each) {
    each.style.color = "#fff"
  })

  content.forEach(function(each) {
    each.style.color = "rgba(255, 255, 255, 0.6)"
  })

  cards.forEach(function(each) {
    each.style.backgroundColor = "#0e163e"
  })

  cardText.forEach(function(each) {
    each.style.color = "#fff"
  })

  cardBtn.forEach(function(each) {
    each.style.border ="1px solid #3758f9"
  })

  formBg.forEach(function(each) {
    each.style.backgroundColor = "#0e163e"
  })

  formBorder.forEach(function(each) {
    each.style.border = "1px solid #3758f9"
  })
})

switcherDay.addEventListener('click', () => {
  switcherNight.classList.remove('active-night')
  switcherDay.classList.add('active')

  document.body.classList.remove('js-body-dark-mode')
  modeSelect.style.backgroundColor = ""

  main.forEach(function(each) {
    each.style.backgroundColor = ""
  })

  title.forEach(function(each) {
    each.style.color = ""
  })

  content.forEach(function(each) {
    each.style.color = ""
  })

  cards.forEach(function(each) {
    each.style.backgroundColor = ""
  })

  cardText.forEach(function(each) {
    each.style.color = ""
  })

  cardBtn.forEach(function(each) {
    each.style.border =""
  })

  formBg.forEach(function(each) {
    each.style.backgroundColor = ""
  })

  formBorder.forEach(function(each) {
    each.style.border = ""
  })
})

