window.onload = function() {

  var llamarUsuarios = new XMLHttpRequest();

  llamarUsuarios.onreadystatechange = function(){
    if (llamarUsuarios.readyState == 4 && llamarUsuarios.status == 200){
      console.log(llamarUsuarios.responseText);
      var response = JSON.parse(llamarUsuarios.responseText);
      console.log(response);
      var usuarios = response["cantidad"];
        console.log(usuarios);

    }
  };
  llamarUsuarios.open("GET", "https://sprint.digitalhouse.com/getUsuarios", true);
  llamarUsuarios.send();


  var sumarUsuarios = new XMLHttpRequest();

  sumarUsuarios.onreadystatechange = function(){
    if (sumarUsuarios.readyState == 4 && sumarUsuarios.status == 200){
      var responsesumar = JSON.parse(sumarUsuarios.responseText);
      
    }
  };
  llamarUsuarios.open("GET", "https://sprint.digitalhouse.com/nuevoUsuario", true);
  llamarUsuarios.send();

};
