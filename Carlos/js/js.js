jQuery(document).ready(function($) {

  //

  // 

  // 

  // Evaluación de esta franja de código  para ejecutar procesos a  partir de esta funcionalidad 

  // 

  //
  // La función solo activara en evento y cambiaremos el nombre para uno 
  // más descriptivo la probabilidad de necesitar más funciones como esta 
  // es inminente ya que pudiésemos usar la misma y calcular que elemento 
  // provoco el evento pero mejor lo hacemos individual  para no realizar 
  // estructuras complejas para simplificar código por ahora.   
  function showHint(str) {

    var xhttp;

    if (str.length == 0) {
      document.getElementById("txtHint").innerHTML = "";
      return;
    }

    xhttp = new XMLHttpRequest();

    // Esta función se activara cuando se registren cambios en el servidor.  
    xhttp.onreadystatechange = function() {

      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }

    };

    xhttp.open("GET", "php/php.php?q=" + str, true);
    xhttp.send();
  }

});