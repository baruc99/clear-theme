/*general settings*/
$(document).ready(function () {
    $("#form-contacto").validate({
        highlight: function (element) {
        },
        unhighlight: function (element) {
        },
        rules: {
            telefono: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            }
        },
        messages: {
            telefono: {
                required: "Por favor, ingresa tu número de teléfono",
                number: "Por favor, ingresa un número de teléfono válido",
                minlength: "El número de teléfono debe tener 10 dígitos",
                maxlength: "El número de teléfono debe tener 10 dígitos"
            }
        },
        submitHandler: function (form) {
            var formData = new FormData($(form)[0]);
            formData.append('action', 'sendmail');
            formData.append('permalink', wpurl_ajax.permalink);
            var self = $(form);

            $.ajax({
                url: wpurl_ajax.templateUrl,
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    self.find('button').html('Enviando... <i class="fas fa-spinner fa-spin"></i>');
                },
                success: function (data) {
                    data = JSON.parse(data);
                    console.log(data);
                    $($(form)).prepend("<span class='d-block alert alert-" + data.estatus + "'>" + data.mensaje + "</span>");
                    $($(form)).each(function () {
                        this.reset();
                    });
                },
                complete: function () {
                    self.find('button').html('Enviado');
                    $(this).animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                },
                error: function (xhr) {
                    console.log("Ocurrió un error, inténtalo de nuevo");
                    self.find('button').text('Error');
                }
            });
        }
    });

    function handleBreakpointChange(event) {
      if (event.matches) {
          console.log("Estás en el breakpoint de 768px o menos.");
  
          var firstLi = document.querySelector('#main-menu ul li:first-child');
  
          document.querySelector('#main-menu ul li:first-child a').href = '#';
  
          firstLi.addEventListener('click', function (event) {
              console.log("click");
              document.querySelectorAll('#main-menu ul li:first-child ul')[0].classList.add('menuUp');
          });
  
          $(document).on('click', function (event) {
              if (!$(event.target).closest(firstLi).length) {
                  $('#main-menu ul li:first-child ul').removeClass('menuUp');
                  console.log("otro lado");
              }
          });
      } else {
          console.log("Estás por encima del breakpoint de 768px.");
      }
  }

    var pathname = window.location.pathname;
    var breakpoint = window.matchMedia("(max-width: 768px)");
    breakpoint.addListener(handleBreakpointChange);
    handleBreakpointChange(breakpoint);



    if (pathname == "/eventos/") {
        var currentYearElement = document.getElementById("currentYear");
        var backButton = document.querySelector(".btnFlechas.pr-3");
        var forwardButton = document.querySelector(".btnFlechas.pl-3");
        var currentYear = new Date().getFullYear();

        updateYear();

        backButton.addEventListener("click", function () {
            currentYear--;
            updateYear();
        });

        forwardButton.addEventListener("click", function () {
            currentYear++;
            updateYear();
        });

        function updateYear() {
            currentYearElement.textContent = currentYear;

            backButton.style.display = currentYear < 2024 ? "none" : "inline-block";
            forwardButton.style.display = currentYear > 2023 ? "none" : "inline-block";

            // Obtener todos los enlaces con la clase "card-eventos"
            var enlacesEventos = document.getElementsByClassName("card-eventos");

            // Recorrer los enlaces y actualizar el atributo href con el nuevo año
            for (var i = 0; i < enlacesEventos.length; i++) {
                var enlace = enlacesEventos[i].querySelector("a");
                var href = enlace.getAttribute("href");

                // Remover cualquier referencia a "year" existente en el atributo href
                href = href.replace(/&a=\d{4}/g, "");

                // Agregar el nuevo año al atributo href
                enlace.setAttribute("href", href + "&a=" + currentYear);
            }
        }

    }







});


