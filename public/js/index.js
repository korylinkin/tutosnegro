 $(function() {


   var map;
   function initMap() {
     map = new google.maps.Map(document.getElementById('map'), {
       center: {lat: -34.397, lng: 150.644},
       zoom: 8
     });
   }
   $('a.Card-link').click(function(e) {
     e.preventDefault();
     let link = e.currentTarget.pathname;
     //console.log(link)
     let d ;
     $.ajax({
         url: 'pedir_curso',
         type: 'POST',
         dataType: 'json',
         data: {
           url: link
         },
       })
       .done(function(data) {
         //console.log(data);
         if(data.accion='elegir-curso'){
           d=data;
         }
         $('#contenido-dinamico').html(data.contenido);

       })
       .fail(function(a, b, c) {
         console.log("error");
         console.log(a);
         console.log(b);
         console.log(c);
       })
       .always(function() {
         //console.log("complete");
         cerrarModal(d);

       });

   });

   $(document).on('click', 'a.CareerCourseItem-link', function(e) {
     e.preventDefault();
     let link = e.currentTarget.pathname;

     $.ajax({
         url: 'pedir_links',
         type: 'POST',
         dataType: 'json',
         data: {
           url: link
         },
       })
       .done(function(data) {
         console.log(data);
         $('.contenedor-descargas').html(data);
       })
       .fail(function(a, b, c) {
         console.log("error");
         console.log(a);
         console.log(b);
         console.log(c);
       })
       .always(function() {
         //console.log("complete");


       });
     console.log('curso elegido');
     console.log(link);

   });

   $(document).ajaxStart(function() {
     console.log('comienza a hacer la peticion');
     mostrarModal();
   });

   function mostrarModal() {
     $('.modal-loading').insertBefore('#contenido-dinamico').addClass('show');
   }

   function cerrarModal(d) {
     $('.modal-loading').slideUp(500,function(){
       $(this).removeClass('show');
       $('#texto-header').html(d.mensaje);
       $('.modal-informacion').insertAfter('.navbar').css({display:'flex'});
     });

   }
 })
