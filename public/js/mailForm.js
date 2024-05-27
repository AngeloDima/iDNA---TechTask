document.addEventListener('DOMContentLoaded', function() {
    const mailSuccess = document.getElementById('mailSuccess');
    if (mailSuccess) {

        mailSuccess.classList.remove('hidden');
        mailSuccess.classList.add('visible');

        setTimeout(() => {
            mailSuccess.classList.remove('visible');
            mailSuccess.classList.add('hidden');
        }, 3000);
    }
});
