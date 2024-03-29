$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(function(){
    $('#add-linha').on('submit', function(e){
        e.preventDefault();
        var form = this;
        $.ajax({
            url: $(form).attr('action'),
            method: $(form).attr('method'),
            data: new FormData(form),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function(){
                    $(form).find('span.error-text').text('');
            },
            sucess:function(data){
                if(data.code == 0){
                    $.each(data.error, function(prefix, val){
                        $(form).find('span.'+prefix+'_error').text(val[0]);
                    });

                }
                else{
                    $(form)[0].reset();
                    alert(data.msg);
                }
            }

        });
    });
});
