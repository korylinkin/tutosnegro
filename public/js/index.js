 $(function() {


$('#calcular').click(function(e){
e.preventDefault();
 var datos =$('form').serializeArray();


  $.ajax({
          url: 'procesar',
          type: 'post',
          dataType: 'json',
          data:{data:datos}
        })
        .done(function(data) {
          if (data.exito) {
            //aca podemos mostrar
            let resultado = data.resultado;
            $('.errores').html('<li class="list-group-item">Le toca cada uno :  '+resultado+'</li>')
          }
          else{
            //aca mostras los errores
            $('.errores').html('');
            for (var i = 0; i < data.errores.length; i++) {
              $('.errores').append(data.errores[i]);
            }
            $('.contenedor-errores').show();
          }

            console.log(data);
        })
        .fail(function(a, b, c) {
          console.log("error");
          console.log(a);
          console.log(b);
          console.log(c);
        })
        .always(function() {
          console.log("complete");

        });


$('.contenedor-errores').click(function(e){
  $(this).hide();
})


})






















})
