@extends('navbar')

@section('title', 'Add')

@section('content')
    <div class="form-container" style="height: 85vh">
        <h1>Add Product</h1>
        <form action="/add" method="POST" style="margin-top: 20px; width:100%" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Product Name</label>
                <input type="text" name="product_name" style="width: 100%">
            </div>

            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;">Product Price</label>
                <textarea name="product_price" cols="66" rows="5"></textarea>
            </div>

            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;">Product Category</label>
                <select name="product_category" id="product_category">
                    @foreach ($categories as $category)
                        <option value="{{$category->name}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;">Product Image</label>
                <input type="file" name="product_image">
            </div>

            <button type="submit" style="margin-top: 30px">Update</button>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
@endsection
