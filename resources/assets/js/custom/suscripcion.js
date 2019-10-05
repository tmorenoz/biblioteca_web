$("#envioCorreo").validate({
      rules: {
          email: {
            required: true,
            email: true
          }
      }
      ,errorPlacement: function(error, element) {
      error.insertBefore( element );
      },
      messages: {
            email: {
              required: "Ingresa tu correo",
              email: "Tu correo no es correcto"
            }
          },
      success: function(label, element) {
          $(element).removeClass('is-invalid');
      },
      errorPlacement: function(error, element) {
          $(element).addClass('is-invalid');
      },
      invalidHandler: function(form, validator) {
          validator.focusInvalid();
      },
      submitHandler: function (form) {
          //event.preventDefault();
          var token = $("input[name=_token]").val();
          var formData = new FormData(form);
          var url = $(form).attr('action');
          $.ajax({
            url: url,
            method: 'POST',
            data: formData,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': token.content
            },
            success: function (response) {
             alerta();
            // $('#modalGracias1').modal('show')
               clearForm();
            },
            error: function (response){
              // alert('esta..');

              console.log(response);
            }
          });
      }
  });


function clearForm() {

	$(':input').each(function() {
	  var type = this.type;
	  var tag = this.tagName.toLowerCase();
		var filename = $("#chooseFile").val();

	  if (type == 'text' || type == 'password' || tag == 'textarea' || type == 'email' || type == 'file')
	    this.value = "";

	  else if (type == 'checkbox' || type == 'radio')
	    this.checked = false;

	  else if (tag == 'select')
	    this.selectedIndex = "";

	});

}

function alerta(){
      swal(
        'Enviado con éxito.',
        '',
        'success'
      )

}
