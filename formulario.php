<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <title>Formulario</title>
    </head>
    <body>
      <?php include("php/navbar.php");?>
      <?php include("php/form.php");?>




    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js" ></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#contact_form').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                  opt: {
                      validators: {
                          notEmpty: {
                              message: 'Por favor seleccione una opción'
                          }
                      }
                  },
                  optC: {
                      validators: {
                          notEmpty: {
                              message: 'Por favor seleccione una opción'
                          }
                      }
                  },
                  optG: {
                      validators: {
                          notEmpty: {
                              message: 'Por favor seleccione una opción'
                          }
                      }
                  },
                first_name: {
                    validators: {
                            notEmpty: {
                            message: 'Por favor escriba su Nombre'
                        }
                    }
                },
                 last_name: {
                    validators: {
                        notEmpty: {
                            message: 'Por favor escriba su Apellido'
                        }
                    }
                },
                identificacion: {
                  validators: {
                    notEmpty: {
                      message: "Por favor escriba su Identificación"
                    },
                    numeric:{
                        message: "Solo caracteres numericos"
                      }
                  }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Por favor escriba su correo '
                        },
                        emailAddress: {
                        message: "Escriba su correo correctamente"
                      }

                    }
                },

                address: {
                    validators: {
                        notEmpty: {
                            message: 'Por favor escriba su ciudad'
                        }
                    }
                },
                asunt: {
                    validators: {
                        notEmpty: {
                            message: 'Por favor escriba su asunto'
                        }
                    }
                },
                contact1: {
                  validators: {
                      notEmpty: {
                          message: 'Por favor escriba su contacto'
                      }
                  }
                },
                city: {
                  validators: {
                      notEmpty: {
                          message: 'Por favor escriba su ciudad'
                      }
                  }
                },
                comment: {
                    validators: {
                          stringLength: {
                            min: 10,
                            max: 200,
                            message:'Ingrese entre 10 y 200 caracteres'
                        },
                        notEmpty: {
                            message: 'Escriba la descripción'
                        }
                        }
                    }
                }
            })
            .on('success.form.bv', function(e) {
                    $('#contact_form').data('bootstrapValidator').resetForm();

                // Prevent form submission
                e.preventDefault();
                /*
                $(function() {
                    $('#file').ajaxForm(function(result) {
                        alert('the form was successfully processed');
                    });
                });
                */
                // Get the form instance
                var $form = $(e.target);
                var $archivo = document.getElementById('file');

                // Get the BootstrapValidator instance
                var bv = $form.data('bootstrapValidator');
                $.post($form.attr('action'), $form.serialize()).done(function (data) {

                  console.log(data);
                 });

            });
    });



    </script>

    <script>

    $('select[name=optC]').change(function () {
      if($(this).val()===" ")
      $('#divc').hide();
      else
          $('#divc').show();
      }).change();

    </script>

  </body>


</html>
