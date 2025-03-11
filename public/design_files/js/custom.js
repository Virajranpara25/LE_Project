/*
 * Version: 2.1.1
 */
// Image slider start
document.addEventListener('DOMContentLoaded', function() {
	const carouselElement = document.querySelector('#carouselExampleIndicators');
	const carousel = new bootstrap.Carousel(carouselElement, {
	  interval: 6000, // Auto-slide interval in milliseconds
	  ride: 'carousel',
	  pause: false,
	});

	// Custom navigation buttons
	document.querySelector('.carousel-prev').addEventListener('click', function(e) {
	  e.preventDefault();
	  carousel.prev();
	});

	document.querySelector('.carousel-next').addEventListener('click', function(e) {
	  e.preventDefault();
	  carousel.next();
	});

	// Ensure indicators are updated correctly
	carouselElement.addEventListener('slid.bs.carousel', function() {
	  const activeIndex = [...carouselElement.querySelectorAll('.carousel-item')].findIndex(item => item.classList.contains('active'));
	  updateIndicators(activeIndex);
	});

	function updateIndicators(activeIndex) {
	  document.querySelectorAll('.carousel-indicators li').forEach((indicator, index) => {
		indicator.classList.toggle('active', index === activeIndex);
	  });
	}


  });
// Image slider end




// introduction start
// Create an intersection observer to trigger the animation
const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
	// If the element is in the viewport, add the 'visible' class
	if (entry.isIntersecting) {
	  entry.target.classList.add('visible');
	  observer.unobserve(entry.target); // Stop observing after animation
	}
  });
}, { threshold: 0.3 }); // 50% of the element needs to be visible

// Target the elements to animate
const elementsToAnimate = document.querySelectorAll('.text-animation, .image-animation');
elementsToAnimate.forEach(el => {
  observer.observe(el); // Observe each element
});
// introduction end


