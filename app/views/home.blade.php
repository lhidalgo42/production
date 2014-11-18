@extends('layouts.master')

     @section('content')
         <div class="container">
             {{ Form::open(array('url' => '/')) }}
                 <div class="input-group input-group-lg" style="padding-top: 50px;">
                    <span class="input-group-addon">#</span>
                    {{ Form::text('code',"", array('placeholder' => 'Ingrese Codigo de Barras','id' => 'code', 'class' => 'form-control','required','autofocus')) }}
                 </div>
             {{ Form::close() }}
               <div class="alert alert-success" role="alert" style="margin-top: 30px;">
                      <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
               </div>
               <div class="col-md-6">
                   <h2 class="text-center">Productos</h2>
                   <hr>

                   <div class="alert alert-info" role="alert">
                      <strong>Warning!</strong> Better check yourself, you're not looking too good.
                   </div>
                   <div class="alert alert-info " role="alert">
                      <strong>Warning!</strong> Better check yourself, you're not looking too good.
                   </div>
                   <hr>
                   <h2 class="text-center">Producto Erroneo</h2>
                   <hr>
                   <div class="alert alert-info " role="alert">
                      <strong>Warning!</strong> Better check yourself, you're not looking too good.
                   </div>
               </div>
               <div class="col-md-6">
                   <h2 class="text-center">Resultados</h2>
                   <hr>
                   <div class="alert alert-info " role="alert">
                      <strong>Warning!</strong> Better check yourself, you're not looking too good.
                   </div>
               </div>
         </div>
         <script>
         var value = "";

         setInterval(envio, 1000);
         function envio()
         {
             var code = $("#code");
             if(value == code.val()){
                if(code.val() != ""){
                    $.ajax({
                      url: "/api/getOrder",
                      data: {
                        code: code.val()
                      },
                      type : "POST",
                      success: function( data ) {
                         $( "#orders" ).html( "<h3>" +data.order.name+ "</h3>" );

                        code.val("")
                      }
                    });
                }
             }
            else{value = code.val();}
         }
         </script>
     @stop
