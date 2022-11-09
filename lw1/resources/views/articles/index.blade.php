@extends('articles.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-2 mb-2">
        <div class="pull-left">
            <h2>Articles</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('articles.create') }}" class="btn btn-success">Create New Article</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered mt-2">
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Created At</th>
    </tr>
    @foreach ($articles as $article)
    <tr>
        <td>{{ $article->title }}</td>
        <td>{{ $article->description }}</td>
        <td>{{ $article->price }}</td>
        <td>{{ $article->created_at }}</td>
        <td>
            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-info">Show</a>
            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
 