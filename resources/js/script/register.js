document.addEventListener('DOMContentLoaded', function () {
const form = document.getElementById('register_form');

    if (!form) return;

    form.addEventListener('submit', async function (e) {
        e.preventDefault();

        const data = {
            first_name: document.getElementById('first_name').value,
            last_name: document.getElementById('last_name').value,
            email: document.getElementById('email').value,
            password: document.getElementById('password').value,
        };

        try {
            const response = await fetch('/api/register', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(data)
            });

            const result = await response.json();
            console.log(result);

        } catch (error) {
            console.error('Error:', error);
        }
    });
});
