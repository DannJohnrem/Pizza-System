@extends('layouts.app')

@section('content')

<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="{{ asset('img/pizza-house1.png') }}" alt="pizzahouse">
        <div class="title m-b-md">
            <span>The Pizza Street </p>
        </div>

        <a href="{{ url('pizzas/create') }}">
            <button type="button" class="btn btn-outline-primary">Order a Pizza</button>
        </a>
    </div>
</div>
@endsection
