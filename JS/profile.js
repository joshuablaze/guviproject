// Get the user data from local storage
var userData = JSON.parse(localStorage.getItem('userData'));

// Set the user data on the page
document.getElementById('firstname').innerHTML = userData.firstname;
document.getElementById('lastname').innerHTML = userData.lastname;
document.getElementById('email').innerHTML = userData.email;
document.getElementById('mobilenumber').innerHTML = userData.mobilenumber;

// Update the user data in local storage
function updateUserData() {
    var newUserData = {
        firstname: document.getElementById('new-firstname').value,
        lastname: document.getElementById('new-lastname').value,
        email: document.getElementById('new-email').value,
        mobilenumber: document.getElementById('new-mobilenumber').value
    };

    localStorage.setItem('userData', JSON.stringify(newUserData));

    // Refresh the page to show the updated user data
    location.reload();
}
