let slideIndex = 1;
let imageContainer = document.querySelector(".image-container");
let buttons = document.querySelectorAll(".buttons button");

function showSlide(n) {
    slideIndex = n;
    imageContainer.style.left = -500 * (n - 1) + "px";
    buttons.forEach(button => button.classList.remove("active"));
    buttons[n - 1].classList.add("active");
}

function nextSlide() {
    slideIndex++;
    if (slideIndex > 5) {
    slideIndex = 1;
    }
    showSlide(slideIndex);
}

function prevSlide() {
    slideIndex--;
    if (slideIndex < 1) {
    slideIndex = 5;
    }
    showSlide(slideIndex);
}

setInterval(nextSlide, 3000); // Change the slide every 3 seconds
