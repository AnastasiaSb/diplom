@extends('layouts.app')

@section('content')

@section('css')
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection

<div class="container">
	<div class="row">
		<div class="col-4">
			
		</div>
		<div class="col-8">
			@foreach($products as $product)
                <div class="col-4">
                    <a href="/product/{{$product->slug}}">
                    <img src="{{ asset($product->imgPath) }}" style="max-width:100%" alt="">
                    <h4 class="text-center">{{ $product->name }}</h4>
                     <h3 class="text-center">{{ $product->price }}</h4>
                </a>
                </div>
            @endforeach
		</div>
	</div>
</div>
@section('css')
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );
  </script>
@endsection

@endsection