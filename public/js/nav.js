document.getElementById('menuToggle').addEventListener('change', function() {
    const containerNav = document.getElementById('containerNav');
    const body = document.querySelector('body');
    if (this.checked) {
        containerNav.style.display = 'flex';
        body.classList.add('nav-open');
    } else {
        containerNav.style.display = 'none';
        body.classList.remove('nav-open');
    }
});

// Aggiungi un listener per controllare la larghezza dello schermo
window.addEventListener('resize', function() {
    const menuToggle = document.getElementById('menuToggle');
    const screenWidth = window.innerWidth;
    if (screenWidth > 990) {
        menuToggle.checked = false; // Chiudi la nav automaticamente se la larghezza è superiore a 990px
        const containerNav = document.getElementById('containerNav');
        const body = document.querySelector('body');
        containerNav.style.display = 'none';
        body.classList.remove('nav-open');
    }
});
