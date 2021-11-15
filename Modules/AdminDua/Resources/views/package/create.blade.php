@extends('admin::layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Package</h2>
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

<form action="{{ route('package.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
            <strong>Bussiness Name</strong>
            <select class="form-control" type="text" name="bisnis_id">
                <option value disable>Choose Bussiness...</option>
                @foreach ($data_bussiness as $bussiness)
                    <option value="{{ $bussiness->id }}">{{ $bussiness->nama_bisnis }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
            <div class="form-group">
                <strong>Package Name:</strong>
                <input type="text" name="nama_paket" class="form-control" placeholder="Package Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="number" name="harga" class="form-control" placeholder="Price">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-start mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection