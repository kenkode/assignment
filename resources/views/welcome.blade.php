<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Products</title>

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <script src="{{asset('js/jquery.min.js')}}"></script>


    </head>
    <body>
    <div class="container">
    <div id="products" class="row list-group">
        <h3 align="center">Our Products</h3>
        @foreach($products as $product)
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="{{asset('images/'.$product->image) }}" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        {{$product->name}}</h4>
                    <p class="group inner list-group-item-text">
                        {{$product->description}}.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                Ksh. {{number_format($product->price,2)}}</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
</div>
    </body>
</html>
