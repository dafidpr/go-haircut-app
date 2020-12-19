
if(window.location.pathname == '/administrator/update_password'){

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
            display: '#errorName',
            inputName: 'name'
        },
        {
            display: '#errorEmail',
            inputName: 'email'
        },
        {
            display: '#errorPic',
            inputName: 'pic'
        }
    ];
}
