
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #registrar element
    $("#registrar").validate({
    
        // Specify the validation rules
        rules: {
            anioB: {
                required: true,
                digits: true,
                minlength: 4,
                maxlength: 4,
            },
            institucionB: {
                required: true,
                lettersandspaces: true,
                //email: true,
            },
            tituloB: {
                required: true,
            },
            especialidadB: {
                required: false,
                lettersandspaces: true,
            },
            

            
            anioS: {
                required: false,
                digits: true,
                minlength: 4,
                maxlength: 4,
            },
            institucionS: {
                required: false,
                lettersandspaces: true,

            },
            tituloS: {
                required: false,
                lettersandspaces: true,
            },
            carreraS: {
                required: false,
                lettersandspaces: true,
            },
            maestria: {
                required: false,
                lettersandspaces: true,
            },
            doctorado: {
                required: false,
                lettersandspaces: true,
            },
            cursos: {
                letterswithbasicpunc: true,
                //minWords: ,
                maxWords: 30,
            },
            diplomados: {
                letterswithbasicpunc: true,
                maxWords: 30,
            },

        },
        
        // Specify the validation error messages
        messages: {
            anioB: {
                required: "* Por favor ingresa el año ",
                digits: "* Por favor  ingresa un año válido (YYYY)",
                minlength: "* Mínimo 4 dígitos (YYYY)",
                maxlength: "* Máximo 4 dígitos (YYYY)",
            },
            institucionB: { 
                required: "* Por favor ingresa el nombre de la institución",
                lettersandspaces: "* Por favor ingresa un nombre válido (no utilices números ni signos de puntuación)",
                },
            tituloB: {
                required: "* Por favor selecciona una opción",
                
            },
            especialidadB: {
                //required: "",
                lettersandspaces: "* Por favor ingresa un nombre válido (no utilices números ni signos de puntuación)",
            },


            anioS: {
                required: "* Por favor ingresa el año ",
                digits: "* Por favor  ingresa un año válido (YYYY)",
                minlength: "Mínimo 4 dígitos (YYYY)",
                maxlength: "Máximo 4 dígitos (YYYY)",
            },
            institucionS: { 
                required: "* Por favor ingresa el nombre de la institución",
                lettersandspaces: "* Por favor ingresa un nombre válido (no utilices números ni signos de puntuación)",
                },
            tituloS: {
                lettersandspaces: "* Por favor ingresa información válida - no uses números ni signos de puntuación",
            },
            carreraS: {
                lettersandspaces: "* Por favor ingresa información válida - no uses números ni signos de puntuación",
            },
            maestria: {
                lettersandspaces: "* Por favor ingresa información válida - no uses números ni signos de puntuación",
            },
            doctorado: {
                lettersandspaces: "* Por favor ingresa información válida - no uses números ni signos de puntuación",
            },
            cursos: { 
                letterswithbasicpunc: "* Por favor ingresa información válida - no uses números.",
                maxWords: "Máximo 30 palabras",
            },
            diplomados: {
                letterswithbasicpunc: "* Por favor ingresa información válida - no uses números.",
                maxWords: "Máximo 30 palabras",
            },
        }, 

        submitHandler: function(form) {
            form.submit();
        }
    });

  });