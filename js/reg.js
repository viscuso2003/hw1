// js/scripts.js
document.addEventListener('DOMContentLoaded', () => {
    const registerForm = document.getElementById('registerForm');
    const loginForm = document.getElementById('loginForm');
    const errorMessage = document.getElementById('error-message');

    const validatePassword = (password) => {
        const pattern = /^(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;
        return pattern.test(password);
    };

    if (registerForm) {
        registerForm.addEventListener('submit', (e) => {
            const password = document.getElementById('password').value;
            if (!validatePassword(password)) {
                e.preventDefault();
                errorMessage.textContent = 'Password does not meet requirements.';
            }
        });
    }

    if (loginForm) {
        loginForm.addEventListener('submit', (e) => {
            // Additional client-side validation can be added here if needed
        });
    }
});
