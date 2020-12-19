
if(window.location.pathname == '/barber/update_password'){

    var displayErrors = [
        {
            display: '#errorOldPassword',
            inputName: 'old_password'
        },
        {
            display: '#errorNewPassword',
            inputName: 'new_password'
        },
        {
            display: '#errorConfirmPassword',
            inputName: 'confirm_password'
        }
    ];
} else {

    var displayErrors = [
        {
            display: '#errorBarberName',
            inputName: 'barber_name'
        },
        {
            display: '#errorOwnerName',
            inputName: 'owner_name'
        },
        {
            display: '#errorPicture',
            inputName: 'pic'
        },
        {
            display: '#errorEmail',
            inputName: 'email'
        },
        {
            display: '#errorWhatsapp',
            inputName: 'whatsapp'
        },
        {
            display: '#errorFromDay',
            inputName: 'from_day'
        },
        {
            display: '#errorToDay',
            inputName: 'to_day'
        },
        {
            display: '#errorFromHour',
            inputName: 'from_hour'
        },
        {
            display: '#errorToHour',
            inputName: 'to_hour'
        },
        {
            display: '#errorAddress',
            inputName: 'address'
        },
        {
            display: '#errorLat',
            inputName: 'latitude'
        },
        {
            display: '#errorlong',
            inputName: 'longitude'
        }
    ];
}

function imgPreview(input){
    if(input.files && input.files[0]){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#imgPreview').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $('#file').change(function(){

    imgPreview(this);
  })