const topButton = document.querySelector('.js-to-top-button')
const burgerMenu = document.querySelector('.js-burger-menu')
const dropMenu = document.querySelector('.js-dropmenu')
const lineTop = document.querySelector('.line__top')
const lineMiddle = document.querySelector('.line__middle')
const lineBottom = document.querySelector('.line__bottom')
const navLinks = document.querySelectorAll('.nav__item')
const navActive = document.querySelector('.nav__active')

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

navLinks.forEach((link) => {
  if (link.classList.contains('active')) {
    link.nextElementSibling.classList.remove('hidden')
    link.classList.remove('md:hover:bg-white/5')
  }
})