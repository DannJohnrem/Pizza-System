@extends('layouts.app')


@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>

    <form action="" method="">
        <label for="name">Enter your name: </label>
        <input type="text" id="name" name="name">

        <label for="type">Choose pizza type: </label>
        <select name="type" id="type">
            <option value="cheese">Cheese Pizza</option>
            <option value="veggie">Veggie Pizza</option>
            <option value="pepperoni">Pepperoni Pizza</option>
            <option value="meat">Meat Pizza</option>
            <option value="hawaiian">Hawaiian Pizza</option>
            <option value="supreme">Supreme Pizza</option>
        </select>

        <label for="base">Choose base type: </label>
        <select name="base" id="base">
            <option value="cheese">Thick Crust Pizza</option>
            <option value="veggie">Thin Crust</option>
            <option value="pepperoni">Flatbread Crust</option>
        </select>

        <input type="button" name="submit" value="Order Pizza">
    </form>
</div>
@endsection
