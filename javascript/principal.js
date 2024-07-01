
document.addEventListener("DOMContentLoaded", function () {
  // Obtenemos todos los enlaces que queremos manejar
  var enlaces = [
    { id: "Proveedor", objetivo: "proveedor_oculto" },
    { id: "Producto", objetivo: "producto_oculto" },
    { id: "stock", objetivo: "stock_oculto" },
    { id: "Activos", objetivo: "activo_oculto" },
    { id: "Translados", objetivo: "translado_oculto" },
    { id: "ajustes_inventario", objetivo: "Ajustes_Inventario_oculto" },
    { id: "Compras", objetivo: "compra_oculto" },
  ];

  // Iteramos sobre cada enlace y añadimos el evento 'click'
  enlaces.forEach(function (enlace) {
    var enlaceElemento = document.getElementById(enlace.id);

    enlaceElemento.addEventListener("click", function (event) {
      event.preventDefault();

      // Ocultamos todas las secciones primero
      enlaces.forEach(function (otroEnlace) {
        var otraSeccion = document.getElementById(otroEnlace.objetivo);
        otraSeccion.style.display = "none";
      });

      // Mostramos solo la sección correspondiente al enlace actual
      var seccionMostrar = document.getElementById(enlace.objetivo);
      seccionMostrar.style.display = "block";
    });
  });
});
