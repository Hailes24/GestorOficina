$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
  });
  var table = $('.data-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('faturas.index') }}",
      columns: [
          {data: 'num_item', name: 'Numero'},
          {data: 'nome', name: 'Produto'},
          {data: 'qtd', name: 'Quantidade'},
          {data: 'preco_unit', name: 'Preco unitario'},
          {data: 'preco_total', name: 'Preco total'},
          {data: 'action', name: 'action', orderable: false, searchable: false},
      ]
  });
  $('#addline').click(function () {
      $('#saveBtn').val("create-book");
      $('#id_linha').val('');
      $('#bookForm').trigger("reset");
      $('#modelHeading').html("Adiconar Linha");
      $('#ajaxModel').modal('show');
  });
  $('body').on('click', '.editBook', function () {
    var book_id = $(this).data('id');
    var button = $('#modelHeading').html("Edit Book");
    console.log(button);
    $.get("{{ route('faturas.index') }}" +'/' + book_id +'/edit', function (data) {
        $('#modelHeading').html("Edit Book");
        $('#saveBtn').val("edit-book");
        $('#ajaxModel').modal('show');
        $('#book_id').val(data.id);
        $('#id_linha').val(data.num_item);
        $('#produto').val(data.produto);
        $('#qtd').val(data.qtd);
        $('#precoUnit').val(data.preco_unit);
        $('#precoTotal').val(data.preco_total);
    })
 });
  $('#saveBtn').click(function (e) {
      e.preventDefault();
      $(this).html('Save');
      var vend_id = $("#venda_id").val();
      console.log(vend_id);
    var data = {
    'num_item' : $("#id_linha").val(),
    'venda_id' : $("#venda_id").val(),
    'produto_id' :$("#produto option:selected").val(),
    'preco_unit' :$("#precoUnit").val(),
    'qtd' :$("#qtd").val(),
    'preco_total' :$("#precoTotal").val(),
    'book_id' : $("#book_id").val(),
    };
      $.ajax({
        data: data,
        url: "{{ route('faturas.store') }}",
        type: "POST",
        dataType: 'json',
        success: function (data) {

            $('#bookForm').trigger("reset");
            $('#ajaxModel').modal('hide');
            table.draw();

        },
        error: function (data) {
            console.log('Error:', data);
            $('#saveBtn').html('Save Changes');
        }
    });
  });

  $('body').on('click', '.deleteBook', function () {

      var book_id = $(this).data("id");
      var id = $("#book_id").val();
      confirm("Tem certeza que deseja excluir!");

      $.ajax({
          type: "DELETE",
          url: "{{ route('faturas.store') }}"+'/'+id,
          success: function (data) {
              table.draw();
          },
          error: function (data) {
              console.log('Error:', data);
          }
      });
  });

  $(document).on('change', '#produto', function(){
    var produto_id = $(this).val();
    var a =$(this).parent();
    console.log(a);
    $.ajax({
        url: "{{ route('produtos.getdata')}}",
        type: 'get',
        data: {'id': produto_id},
        dataType: 'json',
        success:function(data){
            console.log('Success');
            console.log(data);
            console.log(data.preco_venda);
            var total = data.preco_venda * $('#qtd').val();
            $('#precoUnit').val(data.preco_venda);
            $('#precoTotal').val(total);
            console.log(total);
            $('#precoTotal').val(total);
        },
        error: function (data) {
            console.log('Error:', data);

        }
    });

});

$('#qtd').click(function (e) {
    var total = $('#precoUnit').val() * $('#qtd').val();
    $('#precoTotal').val(total);
});


});




