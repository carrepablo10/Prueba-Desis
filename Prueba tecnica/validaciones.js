function validacion() {
  var formularioValido = true;

  var alias = document.getElementById("alias").value;
  var rut = document.getElementById("rut").value;
  var nombre = document.getElementById("name").value;



  // Validacion campo nombre
  if (nombre == null || nombre == 0) {
    alert("El nombre no puede estar vacio");
    return false;
  }
  
  //Validacion campo alias
  if (alias.length > 5 || alias.length == 0) {
    alert(
      "Campo alias no debe ser mayor a 5 caracteres y debe contener letra y numeros"
    );
    return false;
  }





  return formularioValido;
}
