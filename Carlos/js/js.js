//

// 

// 

// Evaluación de esta franja de código  para ejecutar procesos a  partir de esta funcionalidad 

// 

//
//  la funcion sola activara en evento 
function showHint(str) {

  var xhttp;

  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }

  xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }

  };

  xhttp.open("GET", "php/php.php?q=" + str, true);
  xhttp.send();
}