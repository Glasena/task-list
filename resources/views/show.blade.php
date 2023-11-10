@extends('layouts.app');

@section('title', $task->title);

@section('content')
    <h1>{{ $task->title }}</h1>
    <p1>{{ $task->description }}</p1>
    
    @if ($task->long_description)
        <p>{{ $task->long_description }}</p>    
    @endif
    
    <p>{{ $task->created_at }}</p> 
    <p>{{ $task->updated_at }}</p>
@endsection