document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        centeredSlides: true, 
        initialSlide: 0,
        navigation: {
            nextEl: ".swiper-next",
            prevEl: ".swiper-prev",
            clickable: true,
        },
        breakpoints: {
            576: { slidesPerView: 1, spaceBetween: 15, loop: true, centeredSlides: true },
            768: { slidesPerView: 2, spaceBetween: 20, loop: true, centeredSlides: false },
            992: { slidesPerView: 3, spaceBetween: 30, loop: true, centeredSlides: false },
            1200: { slidesPerView: 3, spaceBetween: 30, loop: true, centeredSlides: false }
        },
        on: {
            slideChangeTransitionStart: function () {
                document.querySelectorAll(".swiper-slide").forEach(slide => slide.classList.remove("active-animate"));
            },
            slideChangeTransitionEnd: function () {
                let activeSlide = document.querySelector(".swiper-slide-active");
                if (activeSlide) activeSlide.classList.add("active-animate");
            }
        }
    });

    // Ensuring IntersectionObserver runs AFTER Swiper is initialized
    let observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) { // Trigger when visible
                entry.target.classList.add("animate"); 
                observer.unobserve(entry.target); // Stop observing after animation
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll(".swiper-slide").forEach(slide => {
        observer.observe(slide);
    });
});
