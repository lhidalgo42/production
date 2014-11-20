@extends('layouts.master')
     @section('content')
         <div class="container">
            <div class="row" style="padding-bottom: 10px;">
                 {{ Form::open(array('url' => '/')) }}
                     <div class="input-group input-group-lg" style="padding-top: 10px;">
                        <span class="input-group-addon">#</span>
                        {{ Form::text('code',"", array('placeholder' => 'Ingrese Codigo de Barras','id' => 'code', 'class' => 'form-control','required','autofocus')) }}
                     </div>
                 {{ Form::close() }}
            </div>
            <div class="row" ng-controller="OrdersController">
                   <div class="alert alert-info" role="alert">
                          <strong class="pull-left">@{{ orders.order.name }}</strong><strong>Code # </strong><ins>@{{ orders.order.id }}</ins>, <strong>Lote # </strong><ins>@{{ orders.order.lote }}.</ins>
                   </div>

                <div class="row">
                <div class="col-xs-12 col-sm-5">
                                       <h2 class="text-center" style="margin-top: -10px;">Resultados<small ng-if="remainingResults()"> @{{ remainingResults() }} Restantes</small></h2>
                                       <hr>
                                       <div class="row" ng-repeat="result in orders.results">
                                           <div ng-if="result.scaned == '1'" class="alert alert-success" role="alert">
                                              <strong class="pull-left">@{{ result.name }}</strong><i class=" pull-right fa fa-check"></i><br><br><strong> Code # </strong><ins>@{{ result.id }}.</ins>
                                           </div>
                                           <div ng-if="result.scaned == '0'" class="alert alert-warning" role="alert">
                                              <strong class="pull-left">@{{ result.name }}</strong><i class="pull-right fa fa-refresh fa-spin"></i><br><br><strong > Code # </strong><ins>@{{ result.id }}.</ins>
                                           </div>
                                       </div>
                                   </div>
                <div class="col-xs-12 col-sm-5 col-sm-offset-2" id="products">
                       <h2 class="text-center" style="margin-top: -10px;">Insumos<small ng-if="remainingProducts()"> @{{ remainingProducts() }} Restantes</small></h2>
                       <hr>
                       <div class="row" ng-repeat="product in orders.products">
                           <div ng-if="product.scaned == '1'" class="alert alert-success" role="alert">
                              <strong class="pull-left">@{{ product.name }}</strong><i class="pull-right fa fa-check"></i><br><br><strong>Code # </strong><ins>@{{ product.id }}.</ins>
                           </div>
                           <div ng-if="product.scaned == '0'" class="alert alert-warning" role="alert">
                              <strong class="pull-left">@{{ product.name }}</strong><i class=" pull-right fa fa-refresh fa-spin"></i><br><br><strong>Code # </strong><ins>@{{ product.id }}.</ins>
                           </div>
                       </div>
                   </div>
                <div class="col-xs-12 col-sm-12">
                    <hr>
                    <h2 class="text-center" style="margin-top: -10px;">Producto Erroneo</h2>
                    <hr>
                    <div class="row" ng-repeat="invalid in orders.invalids">
                       <div class="alert alert-danger " role="alert">
                          <strong class="pull-left">@{{ invalid.name }}</strong><i class=" pull-right fa fa-close "></i><br><br><strong>Code # </strong><ins>@{{ invalid.id }}.</ins>
                       </div>
                    </div>
                </div>

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
                      url: "/order",
                      data: {
                        code: code.val()
                      },
                      type : "POST",
                      success: function() {
                        code.val("")
                      }
                    });
                }
             }
            else{value = code.val();}
         }
         </script>}
         <script>
            function OrdersController($scope, $http) {
                $http.get('/order').success(function(orders) {
                    $scope.orders = orders;
                });

                $scope.remainingProducts = function() {
                    var count = 0;
                    angular.forEach($scope.orders.products, function(product) {
                            count += product.scaned ? 0 : 1;
                    });
                    return count;
                }
                $scope.remainingResults = function() {
                    var count = 0;
                    angular.forEach($scope.orders.results, function(result) {
                            count += result.scaned ? 0 : 1;
                    });
                    return count;
                }

              /*  $scope.addTodo = function() {
                    var todo = {
                        body: $scope.newTodoText,
                        completed: false
                    };

                $scope.todos.push(todo);
                $http.post('todos', todo);
            }; */
         }
         </script>
     @stop
     @section('css')
     <style>
     strong.pull-left
     {
     font-size: 120%;
     }
     .container
     {
     padding-right: 5px;
     padding-left: 5px;
     }
     </style>
     @stop
