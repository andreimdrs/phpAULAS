// Verifica o estado atual do modo dark ao carregar a página
document.addEventListener("DOMContentLoaded", function () {
    const isDarkMode = localStorage.getItem("darkMode") === "true";
    setDarkMode(isDarkMode);
});

// Função para alternar o modo dark
function toggleDarkMode() {
    const isDarkMode = localStorage.getItem("darkMode") === "true";
    setDarkMode(!isDarkMode);
}

// Função para definir o modo dark
function setDarkMode(isDarkMode) {
    const body = document.body;
    const container = document.querySelector('.container');
    const books = document.querySelectorAll('.book');
    const overlay = document.querySelector('.overlay');
    const darkModeToggle = document.querySelector('.dark-mode-toggle button');

    body.classList.toggle('dark-mode', isDarkMode);
    container.classList.toggle('dark-mode', isDarkMode);
    overlay.classList.toggle('dark-mode', isDarkMode);
    darkModeToggle.classList.toggle('active', isDarkMode);

    for (let i = 0; i < books.length; i++) {
        books[i].classList.toggle('dark-mode', isDarkMode);
    }

    // Salva o estado do modo dark no localStorage
    localStorage.setItem("darkMode", isDarkMode);
}
