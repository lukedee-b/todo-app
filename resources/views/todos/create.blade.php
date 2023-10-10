@extends('layouts.app')

@section('content')
<h3>Create Todo</h3>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @if($errors->has('title'))
    <span> {{ $errors->first('title')}} </span>
@endif

<form action="{{route('todos.store') }}" method="post">
    @csrf
    <div>
        <label>Titles</label>
        <input type="text" name="title" id="title" />
    </div>
    <div>
        <label>Description</label>
        <input type="text" name="body" id="body" />
    </div>
    <button type="submit">Create</button>
</form>
@endsection