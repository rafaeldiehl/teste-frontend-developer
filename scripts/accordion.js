const accordionButtons = document.querySelectorAll(".question");

// Abrir/fechar pergunta
accordionButtons.forEach((accordionButton) => {
  accordionButton.addEventListener("click", () => {
    accordionButton.classList.toggle("active");

    // Troca o ícone de "mais" para "menos"
    const icon = accordionButton.querySelector("i");
    if (accordionButton.classList.contains("active")) {
      icon.classList.add("fa-minus");
      icon.classList.remove("fa-plus");
    } else {
      icon.classList.add("fa-plus");
      icon.classList.remove("fa-minus");
    }
  });
});
