/*
 * Version: 2.1.1
 */
//----------------------------------------- Image slider start --------------------------
document.addEventListener('DOMContentLoaded', function () {
    const carouselElement = document.querySelector('#carouselExampleIndicators');
    const carousel = new bootstrap.Carousel(carouselElement, {
        interval: 6000, // Auto-slide interval in milliseconds
        ride: 'carousel',
        pause: false,
    });

    // Custom navigation buttons
    document.querySelector('.carousel-prev').addEventListener('click', function (e) {
        e.preventDefault();
        carousel.prev();
    });

    document.querySelector('.carousel-next').addEventListener('click', function (e) {
        e.preventDefault();
        carousel.next();
    });

    // Ensure indicators are updated correctly
    carouselElement.addEventListener('slid.bs.carousel', function () {
        const activeIndex = [...carouselElement.querySelectorAll('.carousel-item')].findIndex(item => item.classList.contains('active'));
        updateIndicators(activeIndex);
    });

    function updateIndicators(activeIndex) {
        document.querySelectorAll('.carousel-indicators li').forEach((indicator, index) => {
            indicator.classList.toggle('active', index === activeIndex);
        });
    }


});
//--------------------------------- Image slider end  ------------------------------







//------------------------------------ introduction start --------------------------
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
//----------------------------------------------------  introduction end -----------------------

//--------------------------------------------------- all for login page and forget password -------------

// JavaScript for Modal 


// Open Forgot Password Modal
function openForgotPasswordModal() {
    document.getElementById("forgotPasswordModal").style.display = "flex";
}

// Close Forgot Password Modal
function closeForgotPasswordModal() {
    document.getElementById("forgotPasswordModal").style.display = "none";
}

// Send OTP
function sendOtp() {
    let email = document.getElementById("resetEmail").value;

    if (email.trim() === "") {
        alert("Please enter your email.");
        return;
    }

    fetch(sendOtpRoute, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken
        },
        body: JSON.stringify({ email: email })
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                openOtpModal();
            } else {
                alert(data.message);
            }
        })
        .catch(error => console.error("Error:", error));
}


//--------------------------------------------- Open OTP Modal and Start Timer-------------------------
let timer;
let timeLeft = 300; // 5 minutes (300 seconds)


function startOtpTimer() {
    clearInterval(timer);
    timeLeft = 300;

    const countdownElement = document.getElementById("countdown");
    const verifyButton = document.getElementById("verify-btn");

    timer = setInterval(() => {
        let minutes = Math.floor(timeLeft / 60);
        let seconds = timeLeft % 60;
        countdownElement.innerText = `${minutes.toString().padStart(2, "0")}:${seconds.toString().padStart(2, "0")}`;

        if (timeLeft <= 0) {
            clearInterval(timer);
            countdownElement.innerText = "00:00";
            verifyButton.disabled = true;
            verifyButton.innerText = "OTP Expired";
        }

        timeLeft--;
    }, 1000);
}

function openOtpModal() {
    document.getElementById("forgotPasswordModal").style.display = "none";
    document.getElementById("otpModal").style.display = "flex";
    document.getElementById("verify-btn").disabled = false;
    document.getElementById("verify-btn").innerText = "Verify OTP";
    startOtpTimer();
}

function closeOtpModal() {
    document.getElementById("otpModal").style.display = "none";
}

// Move to next OTP box
function moveToNext(current, nextFieldId) {
    if (current.value.length === 1) {
        document.getElementById(nextFieldId)?.focus();
    }
}

// Combine OTP inputs into hidden field 
// AAMA OTP JE 6 ALAG INPUT MA FILL THAYO CHE AENE COMBINE KARE CHE AEK HIDEN FILED MA JETHI MATCH KARI SAKAY .
function combineOtp() {
    let otp = "";
    for (let i = 1; i <= 6; i++) {
        otp += document.getElementById("otp" + i).value;
    }
    document.getElementById("otpInput").value = otp;
}

// Verify OTP
function verifyOtp() {
    combineOtp();
    let otp = document.getElementById("otpInput").value;
    let email = document.getElementById("resetEmail").value;

    console.log("Verifying OTP:", otp, "for email:", email);

    fetch(verifyOtpRoute, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken
        },
        body: JSON.stringify({ email: email, otp: otp })
    })
        .then(response => response.json())
        .then(data => {
            console.log("Response from Laravel:", data);
            if (data.success) {
                alert("OTP verified successfully! Redirecting to reset password...");
                window.location.href = resetPassRoute + "?email=" + encodeURIComponent(email);
            } else {
                alert(data.message);
            }
        })
        .catch(error => console.error("Error:", error));
}

// Resend OTP
function resendOtp() {
    alert("Resending OTP...");
    sendOtp();
}
