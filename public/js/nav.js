document.getElementById('menuToggle').addEventListener('change', function() {
    const redDiv = document.getElementById('redDiv');
    const body = document.querySelector('body');
    if (this.checked) {
        redDiv.style.display = 'flex';
        body.classList.add('nav-open');
    } else {
        redDiv.style.display = 'none';
        body.classList.remove('nav-open');
    }
});
