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
        992: { slidesPerView: 3, spaceBetween: 30, loop: true },
        1200: { slidesPerView: 3, spaceBetween: 30, loop: true }
    },
    on: {
        slideChangeTransitionStart: function () {
            let allSlides = document.querySelectorAll(".swiper-slide");
            allSlides.forEach(slide => slide.classList.remove("active-animate")); // Remove animation class
        },
        slideChangeTransitionEnd: function () {
            let activeSlide = document.querySelector(".swiper-slide-active");
            activeSlide.classList.add("active-animate"); // Add animation class to the active slide
        }
    }
});


document.addEventListener("DOMContentLoaded", function () {
    let observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.intersectionRatio >= 0.5) { // Trigger when 50% visible
                entry.target.classList.add("animate"); // Add animation
                observer.unobserve(entry.target); // Stop observing after animation
            }
        });
    }, { threshold: 0.5 }); // 50% of card must be visible

    document.querySelectorAll(".swiper-slide").forEach(slide => {
        observer.observe(slide); // Observe all swiper slides
    });
});
