// window.onload = function() {
//
//   // Captura form
//   var form = document.getElementById('registry-form');
//
//   // Captura Elementos
//
//   var inputNombre = document.getElementById('first-name');
//   var inputApellido = document.getElementById('last-name');
//   var inputDni = document.getElementById('dni');
//   var inputEmail = document.getElementById('email');
//   var inputEmailConfirmation = document.getElementById('email-confirmation');
//   var inputPassword = document.getElementById('password');
//   var inputDiaNacimiento = document.getElementById('dia-nacimiento');
//   var dia = inputDiaNacimiento.options[inputDiaNacimiento.selectedIndex].value;
//   var inputMesNacimiento = document.getElementById('mes-nacimiento');
//   var mes = inputMesNacimiento.options[inputMesNacimiento.selectedIndex].value;
//   var inputAnioNacimiento = document.getElementById('anio-nacimiento');
//   var anio = inputAnioNacimiento.options[inputAnioNacimiento.selectedIndex].value;
//   var inputGenero = document.querySelector(".gender:checked");
//
//
//   // Controla que el campo tenga algun valor
//   inputNombre.onblur = function(){
//     if (inputNombre.length === 0 || inputNombre.value.trim() === '') {
//         console.log('El campo nombre es obligatorio');
//       }
//   };
//
//   inputApellido.onblur = function(){
//     if (inputApellido.length === 0 || inputApellido.value.trim() === '') {
//         console.log('El campo apellido es obligatorio');
//       }
//   };
//
//   inputDni.onblur = function(){
//     if (inputDni.length === 0 || inputDni.value.trim() === '') {
//         console.log('El campo DNI es obligatorio');
//       }
//   };
//
//   inputEmail.onblur = function(){
//     if (inputEmail.length === 0 || inputEmail.value.trim() === '') {
//         console.log('El campo email es obligatorio');
//       }
//   };
//
//   // COntrola que los correos sean iguales
//   inputEmailConfirmation.onblur = function(){
//     if (inputEmailConfirmation.length === 0 || inputEmailConfirmation.value.trim() === '') {
//         console.log('El campo email es obligatorio');
//       }
//
//     else if (inputEmail.value != inputEmailConfirmation.value) {
//       alert('Los correos no son iguales');
//
//     }
//   };
//
//   inputPassword.onblur = function(){
//     if (inputPassword.length === 0 || inputPassword.value.trim() === '') {
//         console.log('El campo contraseña es obligatorio');
//       }
//   };
//
//   // Controla que la contraseña tenga el largo correcto
//   inputPassword.onchange = function() {
//       if (inputPassword.value.length < 8) {
//         alert('la contraseña es corta');
//       }
//       var passrule = /^[a-z0-9]+$/i;
//       var passres = passrule.test(inputPassword.value);
//       console.log(passres);
//
//     };
//
//
//     form.onsubmit = function(enviar) {
//       enviar.preventDefault();
//
//         var nombre = inputNombre.value;
//         var apellido = inputApellido.value;
//         var dni = inputDni.value;
//         var email = inputEmail.value;
//         var emailconfirm = inputEmailConfirmation.value;
//         var password = inputPassword.value;
//         var dia = inputDiaNacimiento.value;
//         var mes = inputMesNacimiento.value;
//         var anio = inputAnioNacimiento.value;
//         var genero = inputGenero.value;
//
//           console.log(nombre);
//           console.log(apellido);
//           console.log(dni);
//           console.log(email);
//           console.log(dia);
//           console.log(mes);
//           console.log(anio);
//           console.log(genero);
//
//       };
//   };


//   var inputNombre = document.getElementById('first-name')
//
//   var nombre = inputNombre.value;
//
//
//   var boton = document.querySelector('button');
//
//   boton.addEventListener('click',):
//
//   var selectDia = document.getElementById('dia-nacimiento');
//   select.options[select.selectedindex];
// }

window.onload = function() {

  var llamarUsuarios = new XMLHttpRequest();
  
  llamarUsuarios.onreadystatechange = function(){
    if (llamarUsuarios.readyState == 4 && llamarUsuarios.status == 200){
      var response = JSON.parse(llamarUsuarios.responseText).contenido;
      for (var cantidad in response) {
        var usuarios = response[cantidad];

        console.log(usuarios)
      }
    }
  };
  llamarUsuarios.open("GET", "https://sprint.digitalhouse.com/getUsuarios", true);
  llamarUsuarios.send();

//   selectCountry.onchange = function() {
//
// 		var opcionesPaises = selectCountry.options;
// 		var indiceSeleccionado = selectCountry.selectedIndex;
// 		var opcionSeleccionada = opcionesPaises[indiceSeleccionado];
// 		var valorSeleccionado = opcionSeleccionada.value;
//
//     console.log(valorSeleccionado);
//
//     var llamarprov = new XMLHttpRequest();
//
//     llamarprov.onreadystatechange = function(){
//
//       if (llamarprov.readyState == 4 && llamarprov.status == 200) {
//         var response = JSON.parse(this.responseText).contenido;
//
//         selectCiudad.innerHTML = "";
//
//         for (var prov in response){
//           idProv = response[prov];
//
//           var opcionNueva = '<option value="' + idProv + '">' + prov + "</option>";
//
//           selectCiudad.innerHTML = selectCiudad.innerHTML + opcionNueva
//         }
//       }
//     }
//
//     llamarprov.open("GET","http://pilote.techo.org/admin/?do=api.getRegiones?idPais=" + valorSeleccionado)
//     llamarprov.send();
// }
};
