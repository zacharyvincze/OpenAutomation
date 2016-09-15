$(document).ready(function() {
    $('#lighon').click(function() {
        $.ajax({
            type: 'post',
            url: '/lighton.php',
            success: function() {
                $('#lightoff').removeClass('btn-red-active');
                $('#lightoff').addClass('btn-red-unactive');
                $('#lighton').removeClass('btn-green-unactive');
                $('#lighton').addClass('btn-green-active');
            }
        });
    });
    $('#lighoff').click(function() {
        $.ajax({
            type: 'post',
            url: '/lightoff.php',
            success: function() {
                $('#lightoff').removeClass('btn-red-unactive');
                $('#lightoff').addClass('btn-red-active');
                $('#lighton').removeClass('btn-green-active');
                $('#lighton').addClass('btn-green-unactive');
            }
        });
    });
});

function turnOn(id) {
    $.ajax({
        type: 'post',
        url: '/lighton.php',
        data: {
            id: id
        },
        success: function(html) {
            alert(html);
        }
    });
}
