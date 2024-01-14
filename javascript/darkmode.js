const switcherDay = document.querySelector('.js-light')
const switcherNight = document.querySelector('.js-dark')

const main = document.querySelectorAll('.js-main')
const title = document.querySelectorAll('.js-title')
const content = document.querySelectorAll('.js-content')
const formBg = document.querySelectorAll('.js-form')
const formBorder = document.querySelectorAll('.js-form-border')

switcherNight.addEventListener('click', () => {
  switcherDay.classList.remove('active')
  switcherNight.classList.add('active')

  document.body.classList.add('js-body-dark-mode')
  main.forEach(function(each) {
    each.style.backgroundColor = "#040817"
  })

  title.forEach(function(each) {
    each.style.color = "#fff"
  })

  content.forEach(function(each) {
    each.style.color = "rgba(255, 255, 255, 0.6)"
  })

  formBg.forEach(function(each) {
    each.style.backgroundColor = "#0e163e"
  })

  formBorder.forEach(function(each) {
    each.style.border = "1px solid #3758f9"
  })
})

switcherDay.addEventListener('click', () => {
  switcherNight.classList.remove('active')
  switcherDay.classList.add('active')

  document.body.classList.remove('js-body-dark-mode')
})

