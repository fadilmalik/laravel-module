@extends('admin::layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Package</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('package.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('package.update',$package->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
            <div class="form-group">
                <strong>Bussiness Name:</strong>
                <input type="text" name="nama_bisnis" value="{{ $bussiness->nama_bisnis }}" class="form-control" placeholder="Bussiness Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
            <div class="form-group">
                <strong>Alamat:</strong>
                <textarea class="form-control" style="height:150px" name="alamat" placeholder="Address">{{ $bussiness->alamat }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-start mt-3">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection