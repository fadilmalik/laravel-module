@extends('admin::layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-2">
        <div class="pull-left">
            <h2>Package Page</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('package.create') }}"> Create New Package</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered mt-4">
    <tr>
        <th>No</th>
        <th>Bussiness</th>
        <th>Package</th>
        <th>Price</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($data_package as $package)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $package->bussiness->nama_bisnis }}</td>
        <td>{{ $package->nama_paket }}</td>
        <td>{{ $package->harga }}</td>
        <td>
            <form action="{{ route('package.destroy',$package->id) }}" method="POST">

                <a class="btn btn-primary" href="{{ route('package.edit',$package->id) }}">Edit</a>

                @csrf
                @method('DELETE')
  
                <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection