$(function () {
    $('#modalButton').click(function () {
        $('#modal').modal('show')
                .find('#modalContent')
                .load($(this).attr('value'));
    });
});

$(function () {
    $('#modalButtonRegister').click(function () {
        $('#modalRegister').modal('show')
                .find('#modalContentRegister')
                .load($(this).attr('value'));
    });
});