// Funcion para guardar los datos sin recargar la pagina, utilizo ajax con url a procesar.php, method: 'POST', 
// y guardo en la variable data los datos del formulario
function guardarDatos() {
    var txt_nombre = $("#txt_nombre").val();
    var txt_alias = $("#txt_alias").val();
    var txt_rut = $("#txt_rut").val();
    var txt_email = $("#txt_email").val();
    var cbo_region = $("#cbo_region").val();
    var cbo_comuna = $("#cbo_comuna").val();
    var cbo_candidato = $("#cbo_candidato").val();
    var checkbox = $("#checkbox").val();
  
    var datos =
      "txt_nombre=" +
      txt_nombre +
      "&txt_alias=" +
      txt_alias +
      "&txt_rut=" +
      txt_rut +
      "&txt_email=" +
      txt_email +
      "&cbo_region=" +
      cbo_region +
      "&cbo_comuna=" +
      cbo_comuna +
      "&cbo_candidato=" +
      cbo_candidato +
      "&como_se_entero=" +
      checkbox;
  
    $.ajax({
      method: "POST",
      url: "procesar.php",
      data: datos,
    }).done(function (msg) {
      alert("Data saved:" + msg);
      
    });
}


  function guardarDatos() {
    var datos = $("#miformulario").serialize();
    $.ajax({
      url: "procesar.php",
      data: datos,
      type: "POST",
      success: function(response) {
        alert(response);
      },
      error: function() {
        alert("Error al guardar los datos");
      }
    });

  }