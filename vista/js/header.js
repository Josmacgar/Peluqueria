
// sirve para que el elemento a del header sea activo cuando se gaha click
document.addEventListener("DOMContentLoaded", function () {
  const navLinks = document.querySelectorAll("#navbar .nav-link");

  navLinks.forEach(function (link) {
    link.addEventListener("click", function () {
      console.log(link);
      // eliminamos el active de los navbar
      navLinks.forEach(function (link) {
        link.classList.remove("active");
      });

      // añadimos active al elemento cliqueado
      this.classList.add("active");
    });
  });
});
