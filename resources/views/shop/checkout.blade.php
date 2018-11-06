@extends('layouts.app')

@section('content')
	<h1>Оформление заказа</h1>

	@include('shop.cart') <!-- 111 -->
	
	{!! Form::open(['url'=>'/checkout-end']) !!} <!-- 112 -->

	<div class="form-group">
        {!! Form::label('name', 'Имя') !!}
        {!! Form::text('name', '',['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', '',['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone', 'Телефон') !!}
        {!! Form::text('phone', '',['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('adress', 'Адресс') !!}
        {!! Form::text('adress', '',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
          {!! Form::submit('Заказать', ['class'=>'btn btn-primary']) !!}
    </div>

	{!! Form::close() !!} 

@endsection