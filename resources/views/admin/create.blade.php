@extends('layout.admin')

@section('title', 'Home')

@section('content')
@if(session()->has('success')) {
    {{ session('success') }}
}
@endif
<div class="m-10">
    <form action="" method="post" class="form">
        <div class="form-group col-sm btn-lg">
            <input type="text" class="form-control btn-lg" name="product_title" placeholder="Product Title"
                value="{{ old('product_title') }}">
            @if($errors->has('product_title'))
            <span style="color:red">{{ $errors->first('product_title') }}</span>
            @endif
        </div>
        <div class="form-group col-sm btn-lg">
            <input type="text" class="form-control btn-lg" name="description" placeholder="Description"
                value="{{ old('description') }}">
            @if($errors->has('description'))
            <span style="color:red">{{ $errors->first('description') }}</span>
            @endif
        </div>
        <div class="form-group col-sm btn-lg">
            <input type="text" class="form-control btn-lg" name="category" placeholder="Category"
                value="{{ old('category') }}">
            @if($errors->has('category'))
            <span style="color:red">{{ $errors->first('category') }}</span>
            @endif
        </div>
        <div class="row">
            <div class="form-group col-sm btn-lg">
                <select>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </div>
            <div class=" form-group col-sm btn-lg">
                <label for="stock">Stock</label>
                <input type="number" class="btn" name="stock">
            </div>
        </div>
        <br>
        <div class="text-center ">
            <button type="submit" class="btn btn-success btn-lg submit">Add Student</button>
            <div>
    </form>
</div>
@endsection('content')