$(documnet).ready(function(){
    $("inviable-content").hide();
    $(document).on('click','#btn',function(){
        var morelessButton=$("invisble-content").is(".visible")?'REad More' : 'Read Less';
        $(this).text(morelessButton);
        $(this).paren(".box").find(".invisible-content").toggle();
        $(this).paren(".box").find(".visible-content").toggle();
    });

});