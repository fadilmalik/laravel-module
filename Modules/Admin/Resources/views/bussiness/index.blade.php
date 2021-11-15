@extends('admin::layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-2">
        <div class="pull-left">
            <h2>Bussiness Page</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('bussiness.create') }}"> Create New Bussiness</a>
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
        <th>Bussiness Name</th>
        <th>Alamat</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($bussiness as $b)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $b->nama_bisnis }}</td>
        <td>{{ $b->alamat }}</td>
        <td>
            <form action="{{ route('bussiness.destroy',$b->id) }}" method="POST">

                <a class="btn btn-primary" href="{{ route('bussiness.edit',$b->id) }}">Edit</a>

                @csrf
                @method('DELETE')
  
                <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection