$('.show-password').click(function () {
    if ($('#password').attr('type') == "password") {
        $('.input-group-show-password').html('<i class="fas fa-eye"></i>');
        $('#password').attr('type', 'text');
    } else if ($('#password').attr('type') == "text") {
        $('.input-group-show-password').html('<i class="fas fa-eye-slash"></i>');
        $('#password').attr('type', 'password');

    }
});
$('.show-password-confirm').click(function () {
if ($('#password2').attr('type') == "password") {
    $('.input-group-show-password-confirm').html('<i class="fas fa-eye"></i>');
    $('#password2').attr('type', 'text');
} else if ($('#password2').attr('type') == "text") {
    $('.input-group-show-password-confirm').html('<i class="fas fa-eye-slash"></i>');
    $('#password2').attr('type', 'password');

}
});
