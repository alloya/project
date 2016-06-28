$(function(){
    var loading = $('#loadbar').hide();
    $(document)
    .ajaxStart(function () {
        loading.show();
    }).ajaxStop(function () {
        loading.hide();
    });
    
    $("label.btn").on('click',function () {
        var nextQ = $(this).find('input:radio').attr('data-next-q');
        console.log(nextQ);
        $('#loadbar').show();
        $('#quiz').fadeOut();
        setTimeout(function(){   
            $('#quiz').show();
            $('#loadbar').fadeOut();
        }, 1000);
        
    });

    
});	
