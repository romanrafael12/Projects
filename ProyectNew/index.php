<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport"/>
    <link href="css/w3.css" rel="stylesheet" type="text/css"/>
    <script src="js/js.js" type="text/javascript">
    </script>
  </head>
  <title>
    Document
  </title>
</html>
<body>
  <h2>
    The XMLHttpRequest Object
  </h2>
  <h3>
    Start typing a name in the input field below:
  </h3>
  <p>
    Suggestions:
    <span id="txtHint">
    </span>
  </p>
  <p>
    First name:
    <input id="txt1" onkeyup="showHint(this.value)" type="text"/>
  </p>
  <script>
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
  xhttp.open("GET", "php/php.php?q="+str, true);
  xhttp.send();   
}
  </script>
  <!-- <div class="w3-container">
      <h2>
        Navigation Bar with Input and Buttons
      </h2>
      <p>
        Input and button inside navbar:
      </p>
      <div class="w3-bar w3-black w3-border">
        <a class="w3-bar-item w3-button w3-mobile" href="#">
          Home
        </a>
        <a class="w3-bar-item w3-button w3-mobile" href="#">
          Link 1
        </a>
        <a class="w3-bar-item w3-button w3-mobile" href="#">
          Link 2
        </a>
        <input class="w3-bar-item w3-input w3-white w3-mobile" placeholder="Search.." type="text"/>
        <button class="w3-bar-item w3-button w3-green w3-mobile">
          Go
        </button>
      </div>
      <div class="">
       <?php include 'componentes/video1.html';?>
      </div>
    </div> -->
</body>
