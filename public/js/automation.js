function turnOn(id, pin) {
    $.ajax({
        type: 'post',
        url: '/lighton.php',
        data: {
            id: id,
            pin: pin
        },
        success: function(html) {
            if(html == 'true') {
                $('#lighton' + id).removeClass('btn-green-unactive');
                $('#lighton' + id).addClass('btn-green-active');
                $('#lightoff' + id).removeClass('btn-red-active');
                $('#lightoff' + id).addClass('btn-red-unactive');
            } else {
                alert(html);
            }
        }
    });
}

function turnOff(id, pin) {
    $.ajax({
        type: 'post',
        url: '/lightoff.php',
        data: {
            id: id,
            pin: pin
        },
        success: function(html) {
            if(html == 'true') {
                $('#lightoff' + id).removeClass('btn-red-unactive');
                $('#lightoff' + id).addClass('btn-red-active');
                $('#lighton' + id).removeClass('btn-green-active');
                $('#lighton' + id).addClass('btn-green-unactive');
            } else {
                alert(html);
            }
        }
    });
}
