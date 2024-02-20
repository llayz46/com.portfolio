// const myForm = document.getElementById('contact-form')

// myForm.addEventListener('submit', function (e) {
//   const inputName = document.getElementById('name')
//   const inputEmail = document.getElementById('email')
//   const inputPhone = document.getElementById('phone')
//   const inputMessage = document.getElementById('message')
//   const myRegExMail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/
//   const myRegExName = /^[a-zA-ZÀ-ÿ\s]{1,40}$/
  
//   if (inputName.value.trim() === '' || inputEmail.value.trim() === '' || inputPhone.value.trim() === '' || inputMessage.value.trim() === '') {
//     console.log('error')
//     e.preventDefault()
//   } else if (myRegExMail.test(inputEmail.value) === false) {
//     console.log('email: error')
//     e.preventDefault()
//   } else if (myRegExName.test(inputName.value) === false) {
//     console.log('name: error')
//     e.preventDefault()
//   } else if (inputPhone.value.length > 10 ) {
//     console.log('phone: error')
//     e.preventDefault()
//   } else if (inputMessage.value.length > 500 ) {
//     console.log('message: error')
//     e.preventDefault()
//   }
//   else {
//     console.log('success')
//   }
// })

document.getElementById("contact-form").addEventListener("submit", function(event) {
  event.preventDefault()

  const formData = {
    name: document.getElementById("name").value,
    email: document.getElementById("email").value,
    phone: document.getElementById("phone").value,
    message: document.getElementById("message").value
  }

  const xhr = new XMLHttpRequest()
  xhr.open("POST", "https://api.mailjet.com/v3.1/send", true)
  xhr.setRequestHeader("Content-Type", "application/json")
  xhr.setRequestHeader("Authorization", "Basic " + btoa("7a0791690f4f534662958919b804aa8b:cef2ae1b094e1e4e2cff0941da5576ee"))
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      alert("Mail envoyés avec succès!")
      document.getElementById("contact-form").reset()
    }
  };
  xhr.send(JSON.stringify({
    Messages: [{
      From: {
        Email: "crf450rbylel@gmail.com",
        Name: "TEST"
      },
      To: [{
        Email: "pro@llayz.fr",
        Name: "llayz.fr"
      }],
      Subject: "Nouveau message depuis le site llayz.fr",
      TextPart: "Name: " + formData.name + "\nEmail: " + formData.email + "\nMessage: " + formData.message
    }]
  }));
});