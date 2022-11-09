@extends('articles.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-2 mb-2">
        <div class="pull-left">
            <h2>Add New Article</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('articles.index') }}" class="btn btn-success">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('articles.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea type="text" name="description" class="form-control" placeholder="Description">
                        </textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="Submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection