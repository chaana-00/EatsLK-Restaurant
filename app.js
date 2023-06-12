// Initialize Firebase(2)
var config = {
  apiKey: "AIzaSyDoYJ3oE9BQOc7SO1rifpi05FbMLgytMLc",
  authDomain: "eatslkweb.firebaseapp.com",
  databaseURL: "https://eatslkweb-default-rtdb.firebaseio.com",
  projectId: "eatslkweb",
  storageBucket: "eatslkweb.appspot.com",
  messagingSenderId: "809733616238",
  appId: "1:809733616238:web:6ed2d10628d83521332c7f",
  measurementId: "G-0YY1QTNDDR"
};
firebase.initializeApp(config);

//Reference for form collection(3)
let formMessage = firebase.database().ref('userMessages');

//listen for submit event//(1)
document
  .getElementById('contactForm')
  .addEventListener('submit', formSubmit);

//Submit form(1.2)
function formSubmit(e) {
  e.preventDefault();
  // Get Values from the DOM
  let name = document.querySelector('#name').value;
  let email = document.querySelector('#email').value;
  let subject = document.querySelector('#subject').value;
  let message = document.querySelector('#message').value;
  

  //send message values
  sendMessage(name, email, subject, message);

  //Show Alert Message(5)
  document.querySelector('.alert').style.display = 'block';

  //Hide Alert Message After Seven Seconds(6)
  setTimeout(function() {
    document.querySelector('.alert').style.display = 'none';
  }, 7000);

  //Form Reset After Submission(7)
  document.getElementById('contactForm').reset();
}

//Send Message to Firebase(4)

function sendMessage(name, email, subject, message) {
  let newFormMessage = formMessage.push();
  newFormMessage.set({
    name: name,
    email: email,
    subject: subject,
    message: message
    
  });
}