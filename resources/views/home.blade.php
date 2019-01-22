@extends('layouts.index')

@section('title', 'Home page')

@section('content')
<ul>
    @foreach($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
</ul>
@endsection

