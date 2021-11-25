let slides = document.getElementsByClassName("mySlides");
let dots = document.getElementsByClassName("dot");
let dot = document.querySelector(".dot");
let prev = document.querySelector(".prev");
let next = document.querySelector(".next");

if (!slides.length == 0) {
  let slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides((slideIndex += n));
  }

  let currentSlide = function (n) {
    showSlides((slideIndex = n));
  };

  function showSlides(n) {
    if (n > slides.length) {
      slideIndex = 1;
    }

    if (n < 1) {
      slideIndex = slides.length;
    }

    if (slides.length == 1) {
      prev.style.display = "none";
      next.style.display = "none";
      dot.style.display = "none";
    }

    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
      slides[i].className = slides[i].className.replace("active_slide", "");
    }

    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace("active", "");
    }

    slides[slideIndex - 1].style.display = "block";
    slides[slideIndex - 1].classList.add("active_slide");
    dots[slideIndex - 1].className += " active";
  }
}

prev.addEventListener("click", () => {
  plusSlides(-1);
});

next.addEventListener("click", () => {
  plusSlides(1);
});
