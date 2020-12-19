$('.custom-file-input').on('change', function(){
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});

if(displayErrors == null){
    var displayErrors = []
}
var btnId = '#'+$('.button-submit').attr('id');
var btnTitle = $('.button-submit').attr('title') ;

submitForm();
function submitForm()
{

    $('#formSubmit').submit(function(e){
        e.preventDefault();
        setError(displayErrors);
        setLoadingButton(btnId, 'add');
    
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function(data){
                swal({
                    title: 'Success',
                    type: 'success',
                    text: data.pesan,
                    confirmButtonText: 'Ok',
                    showConfirmButton: true
                }).then((result) => {
                    location.reload();
                });
                setLoadingButton(btnId, 'remove', btnTitle);
            },
            error: function(xhr, ajaxOptions, thrownError){
                setLoadingButton(btnId, 'remove', btnTitle);
                if(xhr.status == 400){
                    displayError(displayErrors, xhr.responseJSON);
                    console.log(xhr.responseJSON);
                    
                } else if(xhr.status == 409){
                    swal({
                        title: 'Error ' + xhr.status,
                        type: 'error',
                        text: xhr.responseJSON['pesan']
                    });
                    console.log(xhr.responseJSON['pesan']);
                } else {
                    swal({
                        title: 'Error ' + xhr.status,
                        type: 'error',
                        text: 'GET ' + url + '/' + $('#formSubmit').attr('action') + ' ' + thrownError
                    });
                }
            }
        })
    })
}

function setLoadingButton(element, type, html = null)
{
    if(type == 'add'){
      $(element).addClass('disabled');
      $(element).html('Loading..');
      } else{
        $(element).removeClass('disabled');
        $(element).html(html);
      }
  }

  function displayError(options, data)
  {
    $.each(options, function(key, value){
        if(data.messages[value.inputName] && data.messages[value.inputName][0]){
            $(value.display).removeClass('d-none');
            $('input[name="'+value.inputName+'"]').addClass('is-invalid');
            $(value.display).html(data.messages[value.inputName][0]);
        }
    });
}

function setError(options)
{
    $.each(options, function(key, value){
        $(value.display).addClass('d-none');
        $(value.inputName).removeClass('is-invalid');
    })
}