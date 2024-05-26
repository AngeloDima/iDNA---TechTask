document.getElementById('menuToggle').addEventListener('change', function() {
    const redDiv = document.getElementById('redDiv');
    if (this.checked) {
        redDiv.style.display = 'block';
    } else {
        redDiv.style.display = 'none';
    }
});
