document.addEventListener('DOMContentLoaded', () => {

    // Форма подписки
    const subscribeForm = document.getElementById('subscribe-form');
    if (subscribeForm) {
        subscribeForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const email = subscribeForm.querySelector('input[type="email"]').value;

            try {
                const response = await fetch('subscribe.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: 'email=' + encodeURIComponent(email)
                });

                const result = await response.text();
                alert(result);
                subscribeForm.reset();
            } catch (error) {
                alert('Ошибка при подписке');
            }
        });
    }
});