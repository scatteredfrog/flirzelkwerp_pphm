function showFullImage(name) {
    
    $.blockUI({
        message: $('.ftFullSize').html('(click to close)<br /><img src="images/rec_tools/'+name+'.jpg" /><br />'),
        css: {
            top: '10px'
        }
    });
    setTimeout(function () {
        var ftWidth = $('.ftFullSize img').css('width');
        $('.ftFullSize').parent().css('width',ftWidth);
    },0);
    
    $('.blockUI').on('click',function() {
        $.unblockUI();
        if (typeof ftWidth != 'undefined') {
            ftWidth = '';
        }
    });
}
