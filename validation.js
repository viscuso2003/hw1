document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('registrationForm');
    const passwordInput = document.getElementById('password');

    form.addEventListener('submit', function(event) {
        const password = passwordInput.value;
        
        // Controlla la lunghezza della password
        if (password.length < 8) {
            alert('La password deve essere di almeno 8 caratteri.');
            event.preventDefault();
            return;
        }

        // Controlla se c'è almeno una lettera maiuscola
        if (!/[A-Z]/.test(password)) {
            alert('La password deve contenere almeno una lettera maiuscola.');
            event.preventDefault();
            return;
        }

        // Controlla se c'è almeno un numero
        if (!/[0-9]/.test(password)) {
            alert('La password deve contenere almeno un numero.');
            event.preventDefault();
            return;
        }
    });
});
