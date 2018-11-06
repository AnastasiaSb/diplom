@extends('layouts.app')

@section('title', $product->name)

@section('content')

<div class="container">
	<div class="row">
		<h1>{{ $product->name }}</h1>
		<div class="col-sm-4">
			<img src="{{$product->imgPath}}" alt="" class="thumbnail img-responsive">
		</div>
		<div class="col-sm-8">
			<p>Price {{$product->price}} uah</p>
			<form action="" id="buy">
				<input type="number" min="1" name="qty" value="1">
				<input type="hidden" name="product_id" value="{{$product->id}}">
				<input type="submit" value="add to Cart" class="btn btn-primary">
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h2>Описание</h2>
			{!! $product->description !!}
		</div>
	</div>
</div>

<div id="review" class="tab-pane active">
	<div class="product-tab">

		<div class="product-reviews">
			<h4 class="title">Customer Reviews</h4>
			@foreach($comments as $comment)
			<div class="reviews">
				<div class="review">

					{{--<div class="review-title"><span class="summary">Best Product For me :)</span><span class="date"><i class="fa fa-calendar"></i><span>20 minutes ago</span></span></div>--}}
					<div class="text">{{$comment->text}}</div>
					<div class="author m-t-15"><i class="fa fa-pencil-square-o"></i> <span class="name">{{$comment->name}}</span></div>													</div>

			</div><!-- /.reviews -->
		</div><!-- /.product-reviews -->
		@endforeach


		<div class="product-add-review">
			<h4 class="title">Write your own review</h4>

			{!! Form::open(['url' => '/comment/add']) !!}
			{!! Form::hidden('product_id', $product->id) !!}
			<div class="review-form">
				<div class="form-container">
					<form role="form" class="cnt-form">

						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									{!!Form::label('name', 'your name')!!}
									{!!Form::text('name','',['class'=>'form-control txt'])!!}
									{{--<label for="exampleInputName">Your Name <span class="astk">*</span></label>--}}
									{{--<input type="text" class="form-control txt" id="exampleInputName" placeholder="">--}}
								</div><!-- /.form-group -->
								<div class="form-group">
									{!!Form::label('email', 'your email')!!}
									{!!Form::text('email','',['class'=>'form-control txt'])!!}
									{{--<label for="exampleInputSummary">Email <span class="astk">*</span></label>--}}
									{{--<input type="email" class="form-control txt" id="exampleInputSummary" placeholder="">--}}
								</div><!-- /.form-group -->
							</div>

							<div class="col-md-6">
								<div class="form-group">
									{!!Form::label('text', 'Review',['class'=>'astk'])!!}
									{!!Form::text('text','',['class'=>'form-control txt txt-review'])!!}
									{{--<textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder=""></textarea>--}}
								</div><!-- /.form-group -->
							</div>
						</div><!-- /.row -->

						<div class="action text-right">
							{!!Form::submit('SUBMIT REVIEW',['class'=>'btn btn-primary btn-upper'])!!}
						</div><!-- /.action -->

					{!! Form::close() !!}
				</div><!-- /.form-container -->
			</div><!-- /.review-form -->

		</div><!-- /.product-add-review -->

	</div><!-- /.product-tab -->
</div><!-- /.tab-pane -->


@stop