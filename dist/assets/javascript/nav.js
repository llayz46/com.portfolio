const topButton = document.querySelector('.js-to-top-button')
const burgerMenu = document.querySelector('.js-burger-menu')
const dropMenu = document.querySelector('.js-dropmenu')
const lineTop = document.querySelector('.line__top')
const lineMiddle = document.querySelector('.line__middle')
const lineBottom = document.querySelector('.line__bottom')

burgerMenu.addEventListener('click', () => {
  lineTop.classList.toggle('active')
  lineMiddle.classList.toggle('active')
  lineBottom.classList.toggle('active')
  dropMenu.classList.toggle('hidden')
})

document.addEventListener('scroll', () => {
  if (window.scrollY > 100) {
    topButton.classList.remove('scale-0')
    topButton.classList.add('scale-1')
  } else {
    topButton.classList.remove('scale-1')
    topButton.classList.add('scale-0')
  }
})