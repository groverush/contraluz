const acordeonItems = document.querySelectorAll('.acordeon-item');

acordeonItems.forEach(item => {
    const title = item.querySelector('.acordeon-title');
    const content = item.querySelector('.acordeon-content');

    title.addEventListener('click', () => {
        acordeonItems.forEach(item => {
            const content = item.querySelector('.acordeon-content');
            content.classList.remove('active');
        });

        content.classList.toggle('active');
    });
});
// Aquí puedes agregar el código necesario para el funcionamiento del slider y el acordeón
let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}