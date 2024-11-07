
document.addEventListener("DOMContentLoaded", function () {

  // añadir evento click a los enlaces .link-show-section
  var enlaces = document.querySelectorAll(".link-show-section");

  // Iteramos sobre cada enlace y añadimos el evento 'click'
  enlaces.forEach(function (enlace) {

    enlace.addEventListener("click", function (event) {
      event.preventDefault();

      // Ocultamos todas las secciones primero
      ocultarSections();

      // obtener el valor del atributo 'data-show-section'
      var dataShowSection = enlace.getAttribute("data-show-section");

      // Mostrar el section con el id #'dataShowSection'
      var seccionMostrar = document.getElementById(dataShowSection);
      seccionMostrar.style.display = "block";

      // Añadir botón cerrar a la sección
      addCloseButtonToSection(dataShowSection);
    });
  });
});

// Función para ocultar todas las secciones
function ocultarSections() {
  removeItemsByClass(".remove-button");

  var sections = document.querySelectorAll(".section-hide-me");
  sections.forEach(function (otroEnlace) {
    otroEnlace.style.display = "none";
  });
}


function addCloseButtonToSection(idSection) {
  var section = document.getElementById(idSection);
  var closeButton = document.createElement("button");
  // añadir clase remove-button
  closeButton.classList.add("remove-button");
  closeButton.textContent = "Cerrar";
  closeButton.addEventListener("click", function () {
    section.style.display = "none";
  });
  // pegar al inicio del section
  section.insertBefore(closeButton, section.firstChild);
}

function removeItemsByClass(className) {
  var items = document.querySelectorAll(className);
  items.forEach(function (item) {;
    item.remove();
  });
}