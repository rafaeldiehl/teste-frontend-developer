const navbar = document.querySelector(".navbar");
const returnButton = document.querySelector(".return-button");

window.addEventListener("scroll", () => {
  navbarResize();
  toggleReturnButton();
  reveal();
});

// Modifica o aspecto da navbar conforme o scroll do usuário
function navbarResize() {
  if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
}

// Mostra/oculta botão de retornar ao início, no canto inferior direito da tela
function toggleReturnButton() {
  if (
    document.body.scrollTop > 350 ||
    document.documentElement.scrollTop > 350
  ) {
    returnButton.style.opacity = 1;
  } else {
    returnButton.style.opacity = 0;
  }
}

// Revelar/ocultar elementos no scroll
function reveal() {
  const reveals = document.querySelectorAll(".reveal");
  console.log(reveals);

  reveals.forEach((reveal) => {
    let windowheight = window.innerHeight;
    let revealtop = reveal.getBoundingClientRect().top;
    var revealpoint = 5;

    if (revealtop < windowheight - revealpoint) {
      reveal.classList.add("reveal-active");
    } else {
      reveal.classList.remove("reveal-active");
    }
  });
}
