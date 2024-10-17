import './bootstrap';
require('./alpinejs');

// TailwindCSS Dark Mode

// recupera el modo desde localStorage cuando la pagina carga la primera vez
if (localStorage.theme === 'dark' || (!'theme' in localStorage && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.querySelector('html').classList.add('dark')
} else if (localStorage.theme === 'dark') {
    document.querySelector('html').classList.add('dark')
}

// Evento click de los botones.
// Agreag la clase 'dark' al elemento html
// guarda o elimina el modo del localstorage
document.querySelectorAll(".setMode").forEach(item =>
    item.addEventListener("click", () => {
        let htmlClasses = document.querySelector('html').classList;
        if(localStorage.theme == 'dark') {
            htmlClasses.remove('dark');
            localStorage.theme = ''
        } else {
            htmlClasses.add('dark');
            localStorage.theme = 'dark';
        }
    })
)
