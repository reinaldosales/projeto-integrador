// Iniciando Menu de Dashboard
$(".button-collapse").sideNav();

// Valida se as senhas são iguais
$('#confirm-password').keyup(function(e) {
    let password = $('#password').val();
    let confirmPassword = $('#confirm-password').val();

    if (password != confirmPassword) {
        $('#verify-password').html("<i class='material-icons tiny'>info</i> Senhas não são iguais.");
        $('#btn-login').addClass('disabled');
    } else {
        $('#verify-password').html("");
        $('#btn-login').removeClass('disabled');
    }
});