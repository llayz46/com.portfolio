const accordionContent = document.getElementsByClassName('js-accordion-content')
const accordionFaq = document.getElementsByClassName('js-accordion-faq')

const accordion = (accordion) => {
  for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener('click', function() {
      this.classList.toggle('active')
    })
  }
}

accordion(accordionContent)
accordion(accordionFaq)