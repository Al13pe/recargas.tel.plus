let slideIndex = 0;
showSlides();

function showSlides() {
    const slides = document.querySelectorAll('.carousel-container img');
    slides.forEach(slide => slide.style.display = 'none');
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    slides[slideIndex - 1].style.display = 'block';
    setTimeout(showSlides, 2000); // Cambia de imagen cada 2 segundos
}

function prevSlide() {
    slideIndex -= 2;
    if (slideIndex < 0) { slideIndex = slides.length - 2 }
    showSlides();
}

function nextSlide() {
    showSlides();
}
