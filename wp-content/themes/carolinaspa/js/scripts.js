$ = jQuery.noConflict();
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Seleccionar el formulario para validar
        var forms = document.getElementsByClassName('needs-validation');
        // Validar cada campo y prevenir que se envie
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                if (form.checkValidity() === false) {

                    event.stopPropagation();
                    console.log('faltan datos');
                } else {
                    // Obtener valores del formulario
                    var nombre = document.getElementById('nombre').value,
                        email = document.getElementById('email').value,
                        mensaje = document.getElementById('mensaje').value;

                    // ejecutar ajax
                    var xhr = new XMLHttpRequest();

                    // Abrir la conexion
                    xhr.open('POST', 'http://localhost/carolina_spa/inc/enviar.php', true);

                    // Siempre que utilizas un formulario se debe agregar un header
                    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

                    //console.log('Status = ', xhr.status);
                    // revisar el estado
                    xhr.onload = function() {
                        if (xhr.status === 200) {
                            //console.log('Status = ', xhr.status);
                            // console.log('XHR =', xhr.responseText);
                            var respuesta = JSON.parse(xhr.responseText);
                            //var respuesta = xhr.responseText;
                            //var respuesta2 = die(json_encode($respuesta));
                            console.log('Respuesta', respuesta);
                            if (respuesta.respuesta === true) {
                                //console.log('Se envio correctamente');
                                var div = document.createElement('div');
                                div.appendChild(document.createTextNode('Se envio correctamente'));
                                div.classList.add('alert', 'alert-success', 'mt-4', 'text-center');
                                document.querySelector('form').appendChild(div);
                                //  setTimeout(function() {
                                //    document.querySelector('.alert').remove();
                                //  }, 3000);
                            }
                        }
                    }

                    // Enviar el request
                    // xhr.send('nombre=' + nombre + '&empresa=' + empresa + '&email=' + email + '&mensaje=' + mensaje);
                    xhr.send('nombre=' + nombre + '&email=' + email + '&mensaje=' + mensaje);

                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();