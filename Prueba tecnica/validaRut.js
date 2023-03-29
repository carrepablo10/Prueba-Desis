function validarRut(rut) {
    // Verificar que el RUT tenga el formato correcto
    if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test(rut)) {
      alert("El RUT ingresado no tiene un formato válido.");
      return false;
    }
  
    // Eliminar los puntos y guiones del RUT
    rut = rut.replace(/[-|‐]/g, "");
    var dv = rut.slice(-1);
    var rutSinDv = rut.slice(0, -1);
  
    // Calcular el dígito verificador
    var suma = 0;
    var multiplo = 2;
    for (var i = rutSinDv.length - 1; i >= 0; i--) {
      suma += rutSinDv.charAt(i) * multiplo;
      if (multiplo < 7) {
        multiplo += 1;
      } else {
        multiplo = 2;
      }
    }
  
    var dvCalculado = 11 - (suma % 11);
    if (dvCalculado == 10) {
      dvCalculado = "k";
    } else if (dvCalculado == 11) {
      dvCalculado = 0;
    }
  
    // Comparar el dígito verificador calculado con el dígito verificador ingresado
    if (dvCalculado != dv.toLowerCase()) {
      alert("El RUT ingresado es inválido.");
      return false;
    }
  
    alert("El RUT ingresado es válido.");
    return true;
  }