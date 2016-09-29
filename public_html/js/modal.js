$(document).ready(function() {
    var modal = $("#addModal");
    var btn = $("#addBtn");
    var close = $(".close");
    
    btn.click(function() {
        modal.fadeIn(200);
    });
    close.click(function() {
        modal.fadeOut(100);
    });
    $(document).click(function(event) {
        if(event.target.id == 'addModal') {
            modal.fadeOut(100);
        }
    });
});
