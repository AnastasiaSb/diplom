@extends('layouts.app')

@section('content')

    @include('layouts.sidemenu')
    <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
    @include('layouts.new-products-slider')
    </div>

<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
