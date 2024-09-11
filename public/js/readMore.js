document.addEventListener('DOMContentLoaded', function () {
    const readMoreLinks = document.querySelectorAll('.read-more');

    readMoreLinks.forEach(link => {
        link.addEventListener('click', function () {
            const fullDesc = this.previousElementSibling;
            const shortDesc = this.previousElementSibling.previousElementSibling;

            if (fullDesc.style.display === 'none') {
                fullDesc.style.display = 'inline';
                shortDesc.style.display = 'none';
                this.innerText = 'Sembunyikan';
            } else {
                fullDesc.style.display = 'none';
                shortDesc.style.display = 'inline';
                this.innerText = 'Baca Selengkapnya';
            }
        });
    });
});
