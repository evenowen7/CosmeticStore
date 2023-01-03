@extends('navbar')

@section('title', 'Category')

@section('content')
    <div style="margin: 50px 100px">
        <h2> <strong class="d-flex justify-content-center">{{Session::get('mySession')}}Barbatos Shop</strong> </h2>

        <form action="/category">
            <input type="text" placeholder="Search products..." id="search" name="search">
            <button type="submit">Search</button>
        </form>
        <div style="margin-top: 50px">

            <div class="row" style="justify-content">
                @foreach ($sort as $product)
                    <div class="card" style="width: 13rem;margin-top:25px">
                        <img class="card-img-top" src="{{ asset('/storage/image/' . $product->image) }}" alt="Product Image">
                        <div class="card-body">
                            <a class="card-title" href="/detail/{{$product->id}}">{{ $product->name }}</a>
                            <p class="card-text">{{ $product->price }}</p>
                            <p class="card-text">{{ $product->category->name }}</p>
                        </div>
                        <div class="card-body">
                            @auth
                                @if (Auth::user()->role == 'admin')
                                <div class="row">
                                    <a href="/update/{{ $product->id }}" style="margin-top: 10px"
                                        class="btn btn-secondary">Update</a>
                                </div>
                                <div class="row">
                                    <a href="/delete/{{ $product->id }}" style="margin-top: 10px"
                                        class="btn btn-secondary">Delete</a>
                                </div>
                                @endif
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{$products->links()}}
    @endsection
