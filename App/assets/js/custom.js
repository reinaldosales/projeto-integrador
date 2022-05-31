// Pega a URL atual da pagina
let currentUrl = window.location.href.toString();

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


/* DATA PICKER */

$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false, // Close upon selecting a date,
    container: undefined, // ex. 'body' will append picker to body
});



/* TOASTS JAVASCRIPT */

// Valida se há na url a string editUser=true, se sim adiciona um toast à tela
if (currentUrl.includes('editUser=true')) {
    var $toastContent = $('<span>Usuário editado com sucesso!</span>');
    Materialize.toast($toastContent, 3000);
}

// Valida se há na url a string cardCreated=true, se sim adiciona um toast à tela
if (currentUrl.includes('cardCreated=true')) {
    var $toastContent = $('<span>Cartão cadastrado com sucesso!</span>');
    Materialize.toast($toastContent, 3000);
}