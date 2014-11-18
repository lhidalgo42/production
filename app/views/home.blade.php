@extends('layouts.master')

     @section('content')
         <div class="container">
             {{ Form::open(array('url' => '/')) }}
                 <div class="input-group input-group-lg" style="padding-top: 50px;">
                    <span class="input-group-addon">#</span>
                    {{ Form::text('code',"", array('placeholder' => 'Ingrese Codigo de Barras','id' => 'code', 'class' => 'form-control','required','autofocus')) }}
                 </div>
             {{ Form::close() }}
             <div id="orders">

             </div>
         </div>
         <script>
         $("#code").change(function(){
            var code = $("#code");
            setTimeout(function(){
                $.ajax({
                  url: "/api/getOrder",
                  data: {
                    code: code.val()
                  },
                  type : "POST",
                  success: function( data ) {
                    $( "#orders" ).html( "<strong>" + data + "</strong>" );
                    code.val("")
                  }
                });
            }, 1000);
         })
         </script>
     @stop
