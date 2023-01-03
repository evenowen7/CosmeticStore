@extends('navbar')

@section('title', 'Detail')

@section('content')
<div class="form-container" style="height: 85vh">
    <h1>Detail Product</h1>
    <div class="card" style="width: 80rem;margin-top:25px">
        <img class="card-img-top" src="{{ asset('/storage/image/' . $product->image) }}" alt="Product Image">
        <div class="card-body">
            <a class="card-title" href="/detail/{{$product->id}}">Name      : {{ $product->name }}</a>
            <p class="card-text">Price      : {{ $product->price }}</p>
            <p class="card-text">Detail       : Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo provident reiciendis ex sapiente hic voluptatibus magnam enim rem, distinctio deleniti aspernatur tenetur cupiditate impedit incidunt ad facilis? Minima, quis! Expedita!</p>
            {{-- <p class="card-text">{{ $product->category->name }}</p> --}}
            <button type="submit" style="margin-top: 30px">Purchase</button>
        </div>
    </div>

@endsection
