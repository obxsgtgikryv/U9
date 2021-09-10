const items = document.querySelectorAll('[href=""]');

for (const item of items) {
    item.addEventListener('click', (event) => {
        event.preventDefault();
        alert('Sección no disponible.');
    }, false);
}