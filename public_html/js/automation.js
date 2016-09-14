$(document).ready(function() {
    $('#lighton').click(function() {
        $.ajax({
            type: 'post',
            url: '/lighton.php',
            success: function() {
                $('.status').text('on');
            }
        });
    });
    $('#lightoff').click(function() {
        $.ajax({
            type: 'post',
            url: '/lightoff.php',
            success: function() {
                $('.status').text("off");
            }
        });
    });
});
