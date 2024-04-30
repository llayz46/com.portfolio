const body = document.querySelector('.js-body')
const footer = document.querySelector('.js-footer')

if(body.clientHeight < window.innerHeight){
  footer.classList.add('fixed', 'bottom-0', 'w-full')
}

console.log(body.clientHeight < window.innerHeight)