function obtenerFoto() {
    $.ajax({
        url: '../controlador/action/act_getprofile.php',
        type: 'GET',
        success: function(response) {
  
          // La respuesta del servidor se maneja en la variable 'response'
          var datos = JSON.parse(response);
  
          // Realiza las operaciones necesarias con los datos
          var fotoCodificada = datos.foto;

            if (fotoCodificada != null) {
                var imagen = document.getElementById("profile-img");
                imagen.src = "data:image/jpeg;base64," + fotoCodificada;
            } else {
                console.log("foto null");
            }
  
          console.log(datos);
        },
        error: function() {
          console.log('Error al realizar la solicitud');
        }
    });
}

window.onload = obtenerFoto;