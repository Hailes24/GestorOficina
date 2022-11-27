$(document).ready(function(){
    $(document).on('change', '#cliente', function(){
        var cliente_id = $(this).val();
        var a =$(this).parent();
        console.log(a);
        $.ajax({
            url: "{{ route('clientes.getdata')}}",
            type: 'get',
            data: {'id': cliente_id},
            dataType: 'json',
            success:function(data){
                console.log('Success');
                console.log(data);
                console.log(data.email);
                $('#email').val(data.email);
                $('#telemovel').val(data.telemovel);
            },
            error: function (data) {
                console.log('Error:', data);

            }
        });

    });

});
