<!DOCTYPE html>
<html lang="en" ng-app="gemStore">
    <head>
        <meta charset="utf-8" />
        <title>Flatlander Gem Store</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
 <script type="text/javascript" src="js/app.js"></script>
 <script type="text/javascript" src="js/products.js"></script>
 <!-- Default style css-->
 <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>

<body class="container" ng-controller = "StoreController as store">
    <header>
      <h1 class="text-center">Flatlander Crafted Gems</h1>
      <h2 class="text-center">– an Angular store –</h2>
    </header>
    <!--  Products Container  -->
    <div class="list-group">
      <!--  Product Container  -->
      <div class="list-group-item" ng-repeat="product in store.products">
        <h3>
          {{product.name}}
          <span class="pull-right">
              
          <em >{{product.price | currency}}</em>
          <button class="btn btn-primary" >Add to cart </button>
          </span>
        </h3>

        <!-- Image Gallery  -->
        <product-gallery></product-gallery>
        <!-- Tabs Go Here -->
         <product-tabs class="tab"></product-tabs>
      </div>
    </div>
</body>
</html>
