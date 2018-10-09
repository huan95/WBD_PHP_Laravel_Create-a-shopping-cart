$(document).ready(function () {
    $('.delete-task').click(function () {
        var id = $(this).attr('id')
        $.ajax({
            type: 'GET',
            url: '/lists/' + id + '/delete',
            success: function () {
                window.location = '/lists/index';
            }
        });
    });
});