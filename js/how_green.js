$(document).ready(function() {
    $('.imageContainerCement').on('click',function() {
        showPhoto(this.id);
    });
    
    $('.closePhotoView').on('click',function() {
        $('.photoView').hide();
    })
});

function showPhoto(name) {
    $('.photoView').css('background-image','url(images/how_green/'+name);
    $('.photoView').fadeIn();
}