// js/login_scripts.js
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('loginForm');
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(form);
        const errorMessageDiv = document.getElementById('error-message');
        const successMessageDiv = document.getElementById('success-message');
        errorMessageDiv.innerHTML = '';
        successMessageDiv.innerHTML = '';

        fetch('login.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'error') {
                errorMessageDiv.innerHTML = data.message;
            } else if (data.status === 'success') {
                successMessageDiv.innerHTML = data.message;
                setTimeout(() => {
                    window.location.href = 'welcome.php';
                }, 2000);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            errorMessageDiv.innerHTML = 'Si è verificato un errore durante il login.';
        });
    });
});
