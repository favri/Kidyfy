window.onload = function(){
  var preguntas = document.getElementsByClassName("pregunta");
  for (var i = 0; i < preguntas.length; i++) {
    var pregunta = preguntas[i];
    pregunta.onclick = function() {
      if (this.nextElementSibling.style.display == "block") {
        this.nextElementSibling.style.display = "none";
      }
      else
      {
        this.nextElementSibling.style.display = "block";
      }

    }
  }

}
