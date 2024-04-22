const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    const el = entry.target;
    if (entry.isIntersecting) {
      el.classList.add("show");
    } else {
      el.classList.remove("show");
    }
  });
});

const elements = document.querySelectorAll(".js-scroll-animation");
elements.forEach((el) => observer.observe(el));