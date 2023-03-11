// select the form element
const form = document.querySelector('form');

// add an event listener for the form submission
form.addEventListener('submit', function(event) {
  // prevent the form from submitting normally
  event.preventDefault();

  // get the form data
  const formData = new FormData(form);

  // check if password and confirm password match
  const password = formData.get('password');
  const confirmPassword = formData.get('confirm_password');
  if (password !== confirmPassword) {
    alert('Password and Confirm Password do not match!');
    return;
  }

  // create an XMLHttpRequest object
  const xhr = new XMLHttpRequest();

  // set up the callback function for when the request completes
  xhr.onload = function() {
    if (xhr.status === 200) {
      // handle the response from the server
      console.log(xhr.responseText);
    } else {
      // handle errors
      console.error('Error:', xhr.status);
    }
  };

  // open the request and set the request header
  xhr.open('POST', 'register.php');
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  // send the request with the form data
  xhr.send(new URLSearchParams(formData));
});

