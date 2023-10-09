const loginFormElement = document.querySelector('#loginForm');
const inputEmailElement = document.querySelector('#inputEmail');
const inputPasswordElement = document.querySelector('#inputPassword');

const expectedEmail = 'admin@unair.ac.id';
const expectedPassword = 'superpassword';


loginFormElement.addEventListener('submit', function(event) {
    event.preventDefault();
  
    const email = inputEmailElement.value;
    const password = inputPasswordElement.value;
  
    if (email === expectedEmail && password === expectedPassword) {
        goToHome();
    } else {   
        console.log(email);
        console.log(password);
        
    }
});

function goToHome() {
    // Ganti dengan URL atau fungsi yang menampilkan halaman home Anda
    window.location.href = 'home.html';
}

