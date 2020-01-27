@extends('layout.layout')

@section('title', 'Cart')

@section('content')
<table class="table text-center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Seller</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>
                <a href="{{ route('user_search') }}">
                    OMBRE STAR PRINT CREPE PLEATED EMPIRE DRESS
                </a>
            </td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>
                <button class="btn btn-primary btn-lg">Edit</button>
                <button class="btn btn-danger btn-lg">Remove</button>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@mdo</td>
            <td>
                <button class="btn btn-primary btn-lg">Edit</button>
                <button class="btn btn-danger btn-lg">Remove</button>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>@mdo</td>
            <td>
                <button class="btn btn-primary btn-lg">Edit</button>
                <button class="btn btn-danger btn-lg">Remove</button>
            </td>   
        </tr>
    </tbody>
</table>
@endsection('content')