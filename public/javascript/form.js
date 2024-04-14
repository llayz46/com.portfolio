const myForm = document.getElementById('contact-form')
const myRegExMail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/
const myRegExName = /^[a-zA-ZÀ-ÿ\s]{1,40}$/

myForm.addEventListener('submit', function (e) {
  const inputName = document.getElementById('name')
  const inputEmail = document.getElementById('email')
  const inputPhone = document.getElementById('phone')
  const inputMessage = document.getElementById('message')
  
  if (inputName.value.trim() === '' || inputEmail.value.trim() === '' || inputPhone.value.trim() === '' || inputMessage.value.trim() === '') {
    console.log('error')
    e.preventDefault()
  } else if (myRegExMail.test(inputEmail.value) === false) {
    console.log('email: error')
    e.preventDefault()
  } else if (myRegExName.test(inputName.value) === false) {
    console.log('name: error')
    e.preventDefault()
  } else if (inputPhone.value.length > 10 ) {
    console.log('phone: error')
    e.preventDefault()
  } else if (inputMessage.value.length > 500 ) {
    console.log('message: error')
    e.preventDefault()
  }
  else {
    console.log('success')
  }
})