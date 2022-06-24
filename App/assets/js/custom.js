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

/* MODALS */
$(document).ready(function() {
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
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

/* MASKS */


/* TOASTS JAVASCRIPT */

// Valida se há na url a string editUser=true, se sim adiciona um toast à tela
if (currentUrl.includes('editUser')) {
    var $toastContent = $('<span>Usuário editado com sucesso!</span>');
    Materialize.toast($toastContent, 3000);
}

// Valida se há na url a string cardCreated=true, se sim adiciona um toast à tela
if (currentUrl.includes('cardCreated')) {
    var $toastContent = $('<span>Cartão cadastrado com sucesso!</span>');
    Materialize.toast($toastContent, 3000);
}

// Valida se há na url a string cardAlReadyExists=true, se sim adiciona um toast à tela
if (currentUrl.includes('cardAlReadyExists')) {
    var $toastContent = $('<span>Cartão já cadastrado.</span>');
    Materialize.toast($toastContent, 4000);
}

// Valida se há avatar na url a string avatar=true, se sim adiciona um toast à tela
if (currentUrl.includes('avatar')) {
    var $toastContent = $('<span>Tipo de arquivo do Avatar inválido!</span>');
    Materialize.toast($toastContent, 4000);
}

// Valida se há cardDeleted na url a string avatar=true, se sim adiciona um toast à tela
if (currentUrl.includes('cardDeleted')) {
    var $toastContent = $('<span>Cartão deletado com sucesso!</span>');
    Materialize.toast($toastContent, 4000);
}

// Valida se há cardEdited na url a string avatar=true, se sim adiciona um toast à tela
if (currentUrl.includes('cardEdited')) {
    var $toastContent = $('<span>Cartão editado com sucesso!</span>');
    Materialize.toast($toastContent, 4000);
}

// Valida se há categoryCreated na url a string avatar=true, se sim adiciona um toast à tela
if (currentUrl.includes('categoryCreated')) {
    var $toastContent = $('<span>Categoria criada com sucesso!</span>');
    Materialize.toast($toastContent, 4000);
}

// Valida se há categoryAlReadyExists na url a string avatar=true, se sim adiciona um toast à tela
if (currentUrl.includes('categoryAlReadyExists')) {
    var $toastContent = $('<span>Categoria já existe!</span>');
    Materialize.toast($toastContent, 4000);
}

// Valida se há categoryEdited na url a string avatar=true, se sim adiciona um toast à tela
if (currentUrl.includes('categoryEdited')) {
    var $toastContent = $('<span>Categoria editada com sucesso!</span>');
    Materialize.toast($toastContent, 4000);
}

// Valida se há categoryDeleted na url a string avatar=true, se sim adiciona um toast à tela
if (currentUrl.includes('categoryDeleted')) {
    var $toastContent = $('<span>Categoria deletada com sucesso!</span>');
    Materialize.toast($toastContent, 4000);
}