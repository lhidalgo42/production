@extends('layouts.master')
     @section('content')
         <div class="container">
            <div class="row" style="padding-top: 5px;">
                <div class="form-group has-success has-feedback">
                  <input type="text" class="form-control" id="code" aria-describedby="inputSuccess2Status" placeholder="Ingrese Codigo de Barras">
                  <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                  <span id="inputSuccess2Status" class="sr-only">(success)</span>
                </div>
            </div>
            <div class="row" ng-controller="OrdersController">
                <div class="alert alert-info" role="alert">
                    <strong style="font-size: 120%">@{{ orders.order.name }}</strong> <strong> Code # </strong><ins>@{{ orders.order.id }}</ins>, <strong>Lote # </strong><ins>@{{ orders.order.lote }}.</ins>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <h4 class="text-center" style="margin-top: -15px;"><em>Resultados<small ng-if="remainingResults()"> @{{ remainingResults() }} Restantes</small></em></h4>
                        <ul class="list-group">
                            <li ng-repeat="result in orders.results" class="list-group-item @{{ result.class }}" >
                                <strong>@{{ result.name }}</strong><span class="pull-right"><i class="pull-right @{{ result.icon }}"></i><br><em>Cantidad :<strong>@{{ result.scaned }}</strong> de <strong>@{{ result.count }}</strong></em></span><br><ins>@{{ result.id }}.</ins>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12">
                        <h4 class="text-center" style="margin-top: -15px;"><em>Insumos<small ng-if="remainingProducts()"> @{{ remainingProducts() }} Restantes</small></em></h4>
                        <ul class="list-group">
                           <li  ng-repeat="product in orders.products" class="list-group-item @{{ product.class }}">
                              <strong>@{{ product.name }}</strong><span class="pull-right"><i class="pull-right @{{ product.icon }}"></i><br><em>Cantidad :<strong>@{{ product.scaned }}</strong> de <strong>@{{ product.count }}</strong></em></span><br><ins>@{{ product.id }}.</ins>
                           </li>
                        </ul>
                    </div>
                    <div class="col-xs-12">
                        <h2 class="text-center" style="margin-top: -15px;">Producto Erroneo</h2>
                        <hr>
                        <ul class="list-group" >
                           <li class="list-group-item list-group-item-danger" ng-repeat="invalid in orders.invalids">
                              <strong>@{{ invalid.name }}</strong><i class=" pull-right fa fa-close "></i><br> <ins>@{{ invalid.id }}.</ins>
                           </li>
                        </ul>
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
                            count += product.count - product.scaned;
                    });
                    return count;
                }
                $scope.remainingResults = function() {
                    var count = 0;
                    angular.forEach($scope.orders.results, function(result) {
                            count += result.count - result.scaned;
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
        body{
        font-size: 97%;
        }
        .lightgray
        {
        background-color: lightgray;
        }
     </style>
     @stop
