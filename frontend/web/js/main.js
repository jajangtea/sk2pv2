//$(function () {
//    $('#modalButton').click(function () {
//        $('#modal').modal('show')
//                .find('#modalContent')
//                .load($(this).attr('value'));
//    });
//});
//
//$(function () {
//    $('#modalButtonRegister').click(function () {
//        $('#modalRegister').modal('show')
//                .find('#modalContentRegister')
//                .load($(this).attr('value'));
//    });
//});

$("#categoryModal").on("shown.bs.modal", function (event) {
    var button = $(event.relatedTarget)
    var href = button.attr("href")
    $.pjax.reload("#pjax-modal", {
        "timeout": false,
            "url": href,
        "replace": false,
    });
})