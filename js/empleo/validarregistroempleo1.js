  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #registrar element
    $("#registrar").validate({
    
        // Specify the validation rules
        rules: {
            titulo: { 
                required: true,
                lettersandspaces: true,
            },
            descripcion: { 
                required: true,
                lettersandspaces: true,
                maxWords: 50,
            },
            horasPorSemana: { 
                required: true,
                //letterswithspaces: true,
            },
            tipoTrabajo: { 
                required: true,
                //letterswithspaces: true,
            },
            fechaInicio: { 
                required: true,
            },
            fechaFin: {
                required: false,
            },
            presupuesto: {
                required: false,
            },
            categoria: {
                required: true,
            }
        },
        
        // Specify the validation error messages
        messages: {
            titulo: {
                required: "* Por favor ingresa el título del empleo",
                lettersandspaces: "* Por favor ingresa un título válido - sólo letras y espacios",
            },
            descripcion: {
                required: "* Por favor seleccion la descripción del empleo",
                lettersandspaces: "* Por favor ingresa letras y espacios",
                maxWords: "* Máximo 50 palabras",
            },
            horasPorSemana: {
                required: "* Por favor seleccion una opción",
                //letterswithspaces: "* Elige una opción válida",
            },
            tipoTrabajo: {
                required: "* Por favor seleccion una opción",
                //letterswithspaces: "* Elige una opción válida",
            },
            fechaInicio: {
                required: '* Por favor ingresa la fecha en la cuál comienza el trabajo',
            },
            fechaFin: {
                //required: '',
            },
            presupuesto: {
                //required: '',
            },
            categoria: {
                required: "* Por favor seleccion una opción",
            }
        }, 

        submitHandler: function(form) {
            form.submit();
        }
    });

  });