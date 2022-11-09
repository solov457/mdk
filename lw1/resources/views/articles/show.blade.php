@extends('articles.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-2 mb-2">
        <div class="pull-left">
            <h2>Edit Article</h2>
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

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <span type="text" name="title" value="" class="form-control" placeholder="Title">{{ $article->title }}</span>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            <span type="text" name="description" class="form-control" placeholder="Description">{{ $article->description }}</span>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Price:</strong>
            <span type="text" name="price" value="" class="form-control" placeholder="Price">{{ $article->price }}</span>
        </div>
    </div>
</div>
@endsection