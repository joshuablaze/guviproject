// select the form element
const form = document.querySelector('form');

// add an event listener for the form submission
form.addEventListener('submit', function(event) {
  // prevent the form from submitting normally
  event.preventDefault();

  // get the form data
  const formData = new FormData(form);

  // send the request with the form data using the Fetch API
  fetch(form.action, {
    method: 'POST',
    body: formData
  })
  .then(response => {
    if (response.ok) {
      // handle the response from the server
      return response.text();
    } else {
      // handle errors
      throw new Error(`Request error: ${response.status}`);
    }
  })
  .then(responseText => {
    console.log(responseText);
    // do something with the response
  })
  .catch(error => {
    console.error(error);
  });
});
