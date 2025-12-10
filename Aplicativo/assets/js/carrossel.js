 const images = [
        { url: "https://images.unsplash.com/photo-1497633762265-9d179a990aa6?w=800&q=80", alt: "Estudando no Computador" },
        { url: "https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800&q=80", alt: "Estudo em Grupo" }
    ];
    
    let currentSlide = 0;
    const container = document.getElementById('carousel-container');
    const slideWidth = 150;

    images.forEach(img => {
        const div = document.createElement('div');
        div.className = 'flex-shrink-0 w-full h-80'; 
        div.innerHTML = `<img src="${img.url}" alt="${img.alt}" class="w-full h-full object-cover">`;
        container.appendChild(div);
    });

    function updateCarousel() {
        const offset = -currentSlide * slideWidth;
        container.style.transform = `translateX(${offset}%)`;
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % images.length;
        updateCarousel();
        resetAutoSlide();
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + images.length) % images.length;
        updateCarousel();
        resetAutoSlide();
    }

    let autoSlideInterval = setInterval(nextSlide, 3500);

    function resetAutoSlide() {
        clearInterval(autoSlideInterval);
        autoSlideInterval = setInterval(nextSlide, 3500);
    }

    updateCarousel();