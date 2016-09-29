$(document).ready(function() {
    $("#add-form").submit(function() {
        $.ajax({
            type: 'post',
            url: '/add.php',
            data: $('#add-form').serialize(),
            success: function(html) {
                if(html == 'true') {
                    window.location.reload();
                } else {
                    alert(html);
                }
            }
        });
    });
});
